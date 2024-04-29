<?php

use App\Http\Controllers\FormInputController;
use Illuminate\Support\Facades\Route;

// トップページ
Route::get('/', fn () => view('index'));
// 人数選択画面
Route::get('/select', fn () => view('select'));
// お題入力画面
Route::get('/input/{playerCnt}', [FormInputController::class, 'select']);


// みんなのW
Route::get('/latest', fn () => view('latestPost'));
Route::get('/popular', fn () => view('popularPost'));
Route::get('/search', fn () => view('dateSearch'));
