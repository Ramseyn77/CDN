<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\ChapitreController;
use App\Http\Controllers\TitreController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('admin');
});
Route::get('articles/comments/{id}', [ArticleController::class, 'comments']) ;
// Route::get('/login', [AuthController::class, 'loginPage'])->name('loginPage') ;
// Route::post('/login', [AuthController::class, 'login'])->name('auth.login') ;
// Route::get('/email', [UserController::class, 'email']) ;

