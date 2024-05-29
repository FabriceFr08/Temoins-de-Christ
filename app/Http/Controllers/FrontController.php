<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\CategorieArticle;
use App\Models\Article;
use Illuminate\Support\Str;





class FrontController extends Controller
{
    public function index()
    {
        $articles = Article::all();
        return view('index', compact('articles'));
    }

    public function showArticle(Article $article)
    {
        return view('front.detail_article', compact('article'));
    }

    public function articles()
    {
        $articles = Article::all();

        return view('front.articles', compact('articles'));
    }
}
