<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GameController;
use App\Http\Controllers\GreatWController;

// phpinfo
Route::get('/phpinfo', function () {
    phpinfo();
});

// トップページ
Route::get('/', fn () => view('index'))->name('top');

// ゲーム
Route::prefix('game')->group(function () {
    // 人数選択画面
    Route::get('/select', fn () => view('game.select'))->name('game.select');
    // ゲームスタート時
    Route::get('/{playerCnt}/start', [GameController::class, 'start'])->name('game.start');
    // お題入力画面
    Route::get('/input', [GameController::class, 'show'])->name('game.show');
    Route::post('/input', [GameController::class, 'post'])->name('game.post');
    // 結果出力待ち画面
    Route::get('/waiting', [GameController::class, 'create'])->name('game.waiting');
    // 結果画面
    Route::get('/result', fn() => view('game.result'))->name('game.result');
});

// みんなのW
Route::prefix('greatW')->group(function () {
    Route::get('/latest', [GreatWController::class, 'latest'])->name('greatW.latest');
    Route::get('/popular', [GreatWController::class, 'popular'])->name('greatW.popular');
    Route::get('/search', [GreatWController::class, 'search'])->name('greatW.search');
    Route::post('/search', [GreatWController::class, 'search'])->name('greatW.search');
    Route::post('/addGood/{type}', [GreatWController::class, 'addGood'])->name('greatW.addGood');
});
