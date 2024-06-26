<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArticleController ;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ChapitreController;
use App\Http\Controllers\LivreController;
use App\Http\Controllers\TitreController;
use App\Http\Controllers\UserController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('/login',[AuthController::class,'login']) ;

Route::get('users/{id}/consultations',[UserController::class, 'consultations']) ;

Route::resource('articles',ArticleController::class);
Route::resource('livres', LivreController::class) ;
Route::get('livres/{id}/titres', [LivreController::class, 'titres']) ;
Route::get('livres/{id}/chapitres', [LivreController::class, 'chapitres']) ;
// Route::get('livres/{id}/articles', [TitreController::class, 'articles']) ;

Route::resource('chapitres',ChapitreController::class) ;
Route::get('chapitres/{id}/livre', [ChapitreController::class, 'livre']) ;
Route::get('chapitres/{id}/titre', [ChapitreController::class, 'titre']) ;
Route::get('chapitres/{id}/articles', [ChapitreController::class, 'articles']) ;

Route::resource('titres', TitreController::class) ;
Route::get('titres/{id}/livre', [TitreController::class, 'livre']) ;
Route::get('titres/{id}/chapitres', [TitreController::class, 'chapitres']) ;
Route::get('titres/{id}/articles', [TitreController::class, 'articles']) ;

