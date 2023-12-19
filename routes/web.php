<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\GameController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\UserController;
use App\Models\Painter;
use App\Models\User;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [HomeController::class, 'index']);
Route::get('/login', [LoginController::class, 'showLoginForm']);
Route::get('/register', [LoginController::class, 'showRegForm']);
Route::get('/game', [GameController::class, 'gameScreen']);
Route::get('/matched', [GameController::class, 'matched']);
Route::get('/not-matched', [GameController::class, 'not_matched']);
Route::get('/testing', function () {
    $painters = Painter::all();
    $users = User::all();
    return view('testing')->with('painters', $painters)->with('users', $users);;
});