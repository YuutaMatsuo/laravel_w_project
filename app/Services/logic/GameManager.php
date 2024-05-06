<?php

namespace App\Services\logic;

use App\Models\Result;
use App\Models\What;
use App\Models\When;
use App\Models\Where;
use App\Models\Who;

// ゲームに関わる処理をまとめたクラス
class GameManager
{

    // お題の回答状況がプレイ人数以下かどうかを判定
    // ※ゲームをつづけるかどうかの判定に使用
    public function isContinue($gameData)
    {
        $answeredCnt = $gameData->getAnsweredCnt(); // お題の回答状況
        $playerCnt = $gameData->getPlayerCnt(); // プレイヤーの人数
        return $answeredCnt < $playerCnt;
    }

    // 現在のプレイ状況と回答されたお題情報が一致しているか判定
    public function isMatch($gameData, $theme)
    {
        $ansCnt = $gameData->getAnsweredCnt(); // お題の回答状況
        $topicList = $gameData->getTopicList(); // お題のリスト
        return $topicList[$ansCnt]->getTheme() === $theme;
    }

    // 引数で渡された回答と名前をゲームデータにセット
    public function updateGameData($gameData, $answer, $createrName)
    {
        $ansCnt = $gameData->getAnsweredCnt(); // お題の回答状況
        $topicList = $gameData->getTopicList(); // お題のリスト

        // 回答と名前をセット
        $topicList[$ansCnt]->setAnswer($answer);
        if(!$createrName == null){
            $topicList[$ansCnt]->setCreaterName($createrName);
        }
        $gameData->setAnsweredCnt($ansCnt + 1);
    }

    // 未回答のお題にランダムでお題を格納
    public function createText($gameData)
    {
        $topicList = $gameData->getTopicList(); // お題のリスト

        for($i = 0; $i < count($topicList); $i++){
            foreach($topicList as $topic){
                if($topic->getId() === $i){
                    if($topic->getAnswer() == null){
                        // 未回答のお題にデータベースからランダムでお題を取得
                        $topic->setAnswer($this->getRandomText($i));
                    } else {
                        // 回答済みのお題をデータベースに登録
                        $text = $topic->getAnswer();
                        $name = $topic->getCreaterName();
                        $this->insertText($i, $text, $name);
                    }
                }
            }
        }
    }

    // データベースからランダムでお題の回答を1件取得
    public function getRandomText($id)
    {
        switch($id){
            case 0:
                return When::inRandomOrder()->first()->text;
            case 1:
                return Where::inRandomOrder()->first()->text;
            case 2:
                return Who::inRandomOrder()->first()->text;
            case 3:
                return What::inRandomOrder()->first()->text;
        }
    }

    // データベースへお題の回答を登録
    public function insertText($id, $text, $name)
    {
        switch($id){
            case 0:
                When::create(['text' => $text, 'user_name' => $name]);
                break;
            case 1:
                Where::create(['text' => $text, 'user_name' => $name]);
                break;
            case 2:
                Who::create(['text' => $text, 'user_name' => $name]);
                break;
            case 3:
                What::create(['text' => $text, 'user_name' => $name]);
                break;
        }
    }

        // 入力された回答から完成文を生成
        public function createSentence($gameData)
        {
            $topicList = $gameData->getTopicList(); // お題のリスト
            $completedTexts = []; // 回答のリスト
            $completedText = ''; // 回答
            $createrNames = ''; // お題回答者の名前


            // お題のリストから完成文を生成
            for($i = 0; $i < count($topicList); $i++){
                foreach($topicList as $topic){
                    if($topic->getId() === $i){
                        $completedTexts += [$i => $topic->getAnswer() . $topic->getConjunction()];
                        $createrNames .= $topic->getCreaterName() . ', ';
                    }
                }
            }

            // 生成した完成文を文字列に変換
            foreach($completedTexts as $text){
                $completedText .= $text;
            }
            // 完成文とお題の回答者の名前をデータベースに登録
            $this->insertSentence($completedText, substr($createrNames, 0, -2));

            // 完成文とお題回答者の名前をゲームデータにセット
            $gameData->setCompletedText($completedTexts);
            $gameData->setCreaterNames(substr($createrNames, 0, -2));
        }

        public function insertSentence($completedTexts, $createrNames)
        {
            // データベースに完成文を登録
            Result::create(['completed_text' => $completedTexts, 'user_names' => $createrNames, 'good' => 0]);
        }
}
