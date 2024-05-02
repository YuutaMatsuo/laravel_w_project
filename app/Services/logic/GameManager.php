<?php

namespace App\Services\logic;

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
    public function setRandomText($gameData)
    {
        $ansCnt = $gameData->getAnsweredCnt(); // お題の回答状況
        $topicList = $gameData->getTopicList(); // お題のリスト

        // 未回答のお題にランダムでお題を格納
        for ($i = $ansCnt; $i < count($topicList); $i++) {
            $topicList[$i]->setAnswer('テスト投稿');
            $topicList[$i]->setCreaterName('名無しさん');
        }
    }

        // 入力された回答から完成文を生成
        public function createSentence($gameData)
        {
            $topicList = $gameData->getTopicList(); // お題のリスト
            $completedTexts = []; // 回答のリスト
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

            // 完成文とお題回答者の名前をゲームデータにセット
            $gameData->setCompletedText($completedTexts);
            $gameData->setCreaterNames(substr($createrNames, 0, -2));
        }
}
