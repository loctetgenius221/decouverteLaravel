<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class ArticleController extends Controller
{
    public function myFunction(){

        // $mes_articles =DB::table('articles')->get();
        $mes_articles = Article::all();

        return view('articles/articles',[
            'mes_donnees_a_afficher'=>$mes_articles
        ]);

    }

    public function details($numero) {

        $article = Article::find($numero);

        return view('articles/details', ['article'=>$article]);
    }

    public function ajouterArticle(Request $request) {
        dd($request);
    }

}
