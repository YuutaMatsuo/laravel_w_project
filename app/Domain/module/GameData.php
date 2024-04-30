<?php

// ゲームのデータをまとめたクラス
class GameData
{
    // シャッフル済みのプレイヤーとCPUのリスト
    private $roomList;
    // プレイヤーの人数
    private $playerCnt;
    // お題の入力状況
    private $gameCnt = 1;
    // お題回答者の名前
    private $createrNames;

    // getter/setter
    public function getRoomList()
    {
        return $this->roomList;
    }

    public function setRoomList($roomList)
    {
        $this->roomList = $roomList;
    }

    public function getPlayerCnt()
    {
        return $this->playerCnt;
    }

    public function setPlayerCnt($playerCnt)
    {
        $this->playerCnt = $playerCnt;
    }

    public function getGameCnt()
    {
        return $this->gameCnt;
    }

    public function GameCntUp()
    {
        $this->gameCnt += 1;
    }

    public function getCreaterNames()
    {
        return $this->createrNames->substr(0, -2);
    }

    public function setCreaterNames($name)
    {
        $this->createrNames += $name.', ';
    }
}
