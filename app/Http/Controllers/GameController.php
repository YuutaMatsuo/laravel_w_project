<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\module\GameData;
use Illuminate\Routing\Controller;
use App\Services\logic\GameManager;

class GameController extends Controller
{
    // お題入力画面
    // 初回アクセス時の処理
    public function start(Request $request, $playerCnt)
    {
        // ゲームデータの初期化とセッションへの格納
        $gameData = new GameData($playerCnt);
        $request->session()->put('gameData', $gameData);

        return redirect()->route('game.show');
    }

    // お題入力画面
    // リクエストパラメータの取得
    public function post(Request $request)
    {
        // サービスクラスのインスタンス化
        $gm = new GameManager();
        // セッションからゲームデータの取得
        $gameData = $request->session()->get('gameData');
        // リクエストパラメータの取得
        $answer = $request->input('text');
        $createrName = $request->input('name');
        $theme = $request->input('theme');

        //  現在のプレイ状況と回答されたお題情報が一致していたら
        // お題の回答状況を更新
        if ($gm->isMatch($gameData, $theme)) {
            $gm->updateGameData($gameData, $answer, $createrName);
            $request->session()->put('gameData', $gameData);
        }

        return redirect()->route('game.show');
    }

    // お題入力画面
    // 画面の表示
    public function show(Request $request)
    {
        // サービスクラスのインスタンス化
        $gm = new GameManager();
        // ゲームデータの取得
        $gameData = $request->session()->get('gameData');

        // お題の回答状況を確認し、画面遷移を行う
        if ($gm->isContinue($gameData)) {
            $title = $gameData->getTopicList()[$gameData->getAnsweredCnt()]->getTitle();
            $theme = $gameData->getTopicList()[$gameData->getAnsweredCnt()]->getTheme();
            $conjunction = $gameData->getTopicList()[$gameData->getAnsweredCnt()]->getConjunction();

            return view('game.inputForm', ['title' => $title, 'theme' => $theme, 'conjunction' => $conjunction]);
        } else {
            return view('game.waiting');
        }
    }

    // 結果出力待ち画面
    // データベース登録処理
    public function create(Request $request)
    {
        // サービスクラスのインスタンス化
        $gm = new GameManager();
        // ゲームデータの取得
        $gameData = $request->session()->get('gameData');

        // 未回答のお題にお題を格納
        $gm->createText($gameData);
        $gm->createSentence($gameData);
        // セッションへデータの格納
        $request->session()->put('gameData', $gameData);

        return view('game.animation');
    }
}
