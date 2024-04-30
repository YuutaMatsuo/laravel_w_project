<?php

namespace App\Http\Controllers;

use GameManager;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class GameController extends Controller
{
    //
    public function start(Request $request, $playerCnt)
    {
        $rm = new GameManager();
        $roomList = $rm->createRoom($playerCnt);



        return view('input', ['playerCnt' => $playerCnt, 'roomList' => $roomList]);
    }
}
