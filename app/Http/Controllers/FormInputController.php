<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormInputController extends Controller
{
    public function select(Request $request, $playerCnt)
    {
        return view('input', ['playerCnt' => $playerCnt]);
    }
}
