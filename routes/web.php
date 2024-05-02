<?php

use App\Http\Controllers\GameController;
use Illuminate\Support\Facades\Route;

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
    Route::get('/waiting', [GameController::class, 'waiting'])->name('game.waiting');
    // 結果アニメーション画面
    Route::get('/animation', [GameController::class, 'animation'])->name('game.animation');
    // 結果画面
    Route::get('/result', fn() => view('game.result'))->name('game.result');
});

// みんなのW
Route::prefix('greatW')->group(function () {
    Route::get('/latest', fn () => view('greatW.latest'))->name('greatW.latest');
    Route::get('/popular', fn () => view('greatW.popular'))->name('greatW.popular');
    Route::get('/search', fn () => view('greatW.search'))->name('greatW.search');
});
