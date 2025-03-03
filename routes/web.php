<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MoveController;
use App\Http\Controllers\AdminController;

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
    return view('welcome');
});
Route::get('/info-move',[MoveController::class,'infoMove']);
Route::get('/detail-move',[MoveController::class,'detailMove']);
Route::get('/detail-move/{id}', [MoveController::class, 'show'])->name('movie.detail');
Route::get('/info-move/{slug}', [MoveController::class, 'show'])->name('movie.info');


//admin
Route::get('/add-move',[AdminController::class,'addMove']);
Route::get('/delete-move',[AdminController::class,'deleteMove']);
Route::get('/edit-move',[AdminController::class,'editMove']);
Route::get('/login',[AdminController::class,'login'])->name('login');
Route::get('/register',[AdminController::class,'register'])->name('register');
Route::post('/register',[AdminController::class,'postRegister'])->name('post.register');

