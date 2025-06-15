<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;

class ArticleController extends Controller
{
    public function show($slug)
    {
        $article = Article::where('slug', $slug)->firstOrFail();

        $relatedArticles = Article::where('focus_area_id', $article->focus_area_id)
            ->where('id', '!=', $article->id)
            ->inRandomOrder()
            ->get();

            return view('components.article', compact('article', 'relatedArticles'));
    }
}
