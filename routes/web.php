<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArticleController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('articles',[ArticleController::class, 'myFunction']);

Route::get('article/{numero}', [ArticleController::class, 'details']);

Route::get('articles/creer', function(){
    return view('articles/new');
});

Route::post('article/traitement', [ArticleController::class, 'ajouterArticle']);
