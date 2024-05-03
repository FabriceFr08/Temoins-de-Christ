<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\CategorieArticle;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function index()
    {
        $categories = CategorieArticle::all();
        //dd($categories);

        return view('blog.index', [
            'categories' => $categories
        ]);
    }
}
