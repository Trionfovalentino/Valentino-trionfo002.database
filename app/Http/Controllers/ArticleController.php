<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function index()
    {
        $articles = Article::all();
        return view('articles.index', compact('articles'));
    }

    public function create()
    {
        return view('articles.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'category' => 'required|string|max:255',
            'description' => 'required|string',
            'content' => 'required|string',
        ]);

        Article::create([
            'title' => $request->title,
            'category' => $request->category,
            'description' => $request->description,
            'content' => $request->content,
        ]);

        return redirect()->route('articles.index')->with('success', 'Articolo creato con successo!');
    }
}