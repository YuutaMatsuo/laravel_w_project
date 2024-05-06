<?php

namespace App\Http\Controllers;

use App\Models\Result;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class GreatWController extends Controller
{
    // いいねを追加
    public function addGood(Request $request, $type)
    {
        $result = Result::find($request->input('wid'));
        $result->increment('good');

        switch($type){
            case 'latest':
                return redirect()->route('greatW.latest');
            case 'popular':
                return redirect()->route('greatW.popular');
            case 'search':
                return redirect()->route('greatW.search');
        }
    }

    // 最新のお題一覧画面
    public function latest(Request $request)
    {
        $results = Result::orderBy('id', 'desc')->take(15)->get();
        return view('greatW.latest', ['results' => $results]);
    }

    // 人気のお題一覧画面
    public function popular(Request $request)
    {
        $results = Result::orderBy('good', 'desc')->take(15)->get();
        return view('greatW.popular', ['results' => $results]);
    }

    // お題検索画面
    public function search(Request $request)
    {
        $date = $request->input('date');
        $results = Result::whereDate('created_at', $date)->take(15)->get();
        return view('greatW.search', ['results' => $results]);
    }
}
