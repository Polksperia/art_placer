<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\SessionController;
use App\Http\Controllers\GameController;
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

Route::get('/', [SessionController::class, 'index'])->name('root');
Route::get('/login', [UserController::class, 'showLoginForm']);
Route::get('/register', [UserController::class, 'showRegForm']);
Route::post('/process-form', [UserController::class, 'processForm']);
Route::get('/game', [GameController::class, 'gameScreen']);
Route::get('/matched', [GameController::class, 'matched']);
Route::get('/not-matched', [GameController::class, 'notMatched']);
Route::get('/users/{user}', [UserController::class, 'user'])
->name('users.show');
Route::get('/users/{user}/edit', [UserController::class, 'userEdit'])
->name('users.edit');
Route::put('/users/{user}', [UserController::class, 'userUpdate']);
Route::delete('/users/{user}', [UserController::class, 'userDelete'])
->name('users.destroy');
Route::get('/testing', function () {
    $painters = Painter::all();
    $users = User::all();
    return view('testing')->with('painters', $painters)->with('users', $users);;
});
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
