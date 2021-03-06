<?php

use GuzzleHttp\Psr7\Message;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('greeting');
});

Route::get('comments/random', [App\Http\Controllers\HelloController::class,'random']);

Route::get('comments/{message}', [App\Http\Controllers\HelloController::class, 'message']);

Route::get('comments/freeword/{word}', [App\Http\Controllers\HelloController::class,'freeword']);

