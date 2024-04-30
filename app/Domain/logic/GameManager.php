<?php

use Cpu;
use Player;

// ゲームに関わる処理をまとめたクラス
class GameManager
{
    private array $roomList = [];

    // プレイヤーとCPUが格納された配列を返す
    public function createRoom($playerCnt)
    {
        // 1ゲーム4人まで
        // 引数で渡された人数分、プレイヤーを作成
        for($i = 1; $i <= 4; $i++) {
            if($i <= $playerCnt) {
                $this->roomList[$i -1] = new Player($i);
            } else {
                $this->roomList[$i -1] = new Cpu($i);
            }
        }
        // プレイヤーとCPUの並びをシャッフル
        return shuffle($this->roomList);
    }
}
