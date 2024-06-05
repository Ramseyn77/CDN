<?php

use App\Http\Controllers\ChapitreController;
use App\Http\Controllers\TitreController;
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
    return view('welcome');
});

Route::get('chapitres/{id}/livre', [ChapitreController::class, 'livre']) ;
Route::get('chapitres/{id}/chapitre', [ChapitreController::class, 'chapitre']) ;
Route::get('chapitres/{id}/articles', [ChapitreController::class, 'articles']) ;

