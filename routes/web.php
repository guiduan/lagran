<?php

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

use App\Http\Controllers\HomeController;
use App\Http\Controllers\FileController;
use App\Http\Controllers\TestController;
use  App\Http\Controllers\VideoController;

Route::get('/', [HomeController::class, 'index'])->name('home.index');
Route::get('file/get', [FileController::class, 'get'])->name('file.get');
Route::get('player', [VideoController::class, 'player'])->name('video.player');
Route::get('v/{vid}/{file}', [VideoController::class, 'get'])->name('video.get');


Route::any('test', [TestController::class, 'test']);
