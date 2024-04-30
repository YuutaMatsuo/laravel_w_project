<?php

use App\Http\Controllers\GameController;
use Illuminate\Support\Facades\Route;

// トップページ
Route::get('/', fn () => view('index'));
// 人数選択画面
Route::get('/select', fn () => view('select'));
// お題入力画面
Route::get('/input/{playerCnt}', [GameController::class, 'start']);


// みんなのW
Route::prefix('greatW')->group(function(){
    Route::get('/latest', fn() => view('greatW.latest'))->name('greatW.latest');
    Route::get('/popular', fn() => view('greatW.popular'))->name('greatW.popular');
    Route::get('/search', fn() => view('greatW.search'))->name('greatW.search');
});
