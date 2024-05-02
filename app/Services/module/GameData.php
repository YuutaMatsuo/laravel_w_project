<?php

namespace App\Services\module;

// ゲームのデータをまとめたクラス
class GameData
{
    // お題のリスト
    private $topicList;
    // プレイヤーの人数
    private $playerCnt;
    // お題の回答状況
    private $answeredCnt = 0;
    // 完成した文のリスト
    private $completedText = [];
    // お題回答者の名前
    private $createrNames = '';

    // コンストラクタ
    public function __construct($playerCnt)
    {
        $this->topicList = [];
        $this->playerCnt = $playerCnt;

        // お題の生成
        $when = new Topic(0, 'いつ', 'when', '、');
        $where = new Topic(1, 'どこで', 'where', 'で');
        $who = new Topic(2, '誰が', 'who', 'が');
        $what = new Topic(3, 'なにをした', 'what', '。');

        // お題のリストに追加
        $this->topicList = array(
            0 => $when,
            1 => $where,
            2 => $who,
            3 => $what
        );

        // お題のリストをシャッフル
        shuffle($this->topicList);
    }


    // getter/setter
    public function getTopicList()
    {
        return $this->topicList;
    }

    public function getPlayerCnt()
    {
        return $this->playerCnt;
    }

    public function setPlayerCnt($playerCnt)
    {
        $this->playerCnt = $playerCnt;
    }

    public function getAnsweredCnt()
    {
        return $this->answeredCnt;
    }

    public function setAnsweredCnt($answeredCnt)
    {
        $this->answeredCnt = $answeredCnt;
    }

    public function getCompletedText()
    {
        return $this->completedText;
    }

    public function setCompletedText($completedText)
    {
        $this->completedText = $completedText;
    }

    public function getCreaterNames()
    {
        return $this->createrNames;
    }

    public function setCreaterNames($names)
    {
        $this->createrNames = $names;
    }
}
