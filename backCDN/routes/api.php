<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArticleController ;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ChapitreController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\ConsultationController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\LivreController;
use App\Http\Controllers\QuestionController;
use App\Http\Controllers\RechercheController;
use App\Http\Controllers\ReponseController;
use App\Http\Controllers\SectionController;
use App\Http\Controllers\TitreController;
use App\Http\Controllers\TutorielController;
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

Route::post('/login',[AuthController::class,'login']) ; // xynu eyql kzuy hfoy
Route::post('/logout', [AuthController::class, 'logout']);


Route::resource('users', UserController::class) ;
Route::get('experts', [UserController::class, 'experts']) ;
Route::get('users/{id}/consultations',[UserController::class, 'consultations']) ;
Route::post('users/emailVerify/{id}',[UserController::class, 'emailVerify']) ;
Route::post('users/rememberEmail',[UserController::class, 'rememberEmail']) ;
Route::post('users/changePassword',[UserController::class, 'changePassword']) ;

Route::resource('articles',ArticleController::class);
Route::get('articles/comments/{id}', [ArticleController::class, 'comments']) ;
Route::get('articles/events/{id}', [ArticleController::class, 'events']) ;

Route::resource('livres', LivreController::class) ;
Route::get('livres/{id}/titres', [LivreController::class, 'titres']) ;
Route::get('livres/{id}/chapitres', [LivreController::class, 'chapitres']) ;

Route::resource('chapitres',ChapitreController::class) ;
Route::get('chapitres/{id}/livre', [ChapitreController::class, 'livre']) ;
Route::get('chapitres/{id}/titre', [ChapitreController::class, 'titre']) ;
Route::get('chapitres/{id}/articles', [ChapitreController::class, 'articles']) ;
Route::get('chapitres/{id}/sections', [ChapitreController::class, 'sections']) ;

Route::resource('titres', TitreController::class) ;
Route::get('titres/{id}/livre', [TitreController::class, 'livre']) ;
Route::get('titres/{id}/chapitres', [TitreController::class, 'chapitres']) ;
Route::get('titres/{id}/articles', [TitreController::class, 'articles']) ;

Route::resource('recherches',RechercheController::class) ;

Route::resource('sections',SectionController::class) ;

Route::resource('consultations', ConsultationController::class) ;

Route::resource('events', EventController::class) ;

Route::resource('comments', CommentController::class) ;

Route::resource('questions',QuestionController::class) ;
Route::get('questions/{id}/reponses', [QuestionController::class, 'reponses']) ;

Route::resource('reponses', ReponseController::class) ;

Route::resource('tutoriels', TutorielController::class) ;