<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    use AuthorizesRequests;
    public function index()
    {
        $articles = Article::all();
        return view("articles.index", compact('articles'));
    }

    public function myArticles(){
        $articles = Article::where('user_id', 2)->get();
        // dd($articles);
        return view('articles.my-articles', compact('articles'));
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $this->authorize('create', Article::class);
        return view('articles.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->authorize('create', Article::class);
        $data = $request->validate([
            'titre' => 'required|max:255',
            'contenu' => 'required',
            'statut' => 'required|in:brouillon,publie',
        ]);
        $data['user_id'] = Auth::id();
        Article::create($data);
        return redirect()->route('articles.index')->with('success', 'Article creé avec succès.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Article $article)
    {
        // Gate::authorize("view_article", $article);
        $this->authorize('view', $article);
        return view('articles.show', compact('article'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Article $article)
    {
        $this->authorize('update', $article);
        return view('articles.edit', compact('article'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Article $article)
    {
        $this->authorize('update', $article);
        $data = $request->validate([
            'titre' => 'required|max:255',
            'contenu' => 'required',
            'statut' => 'required|in:brouillon,publie'
        ]);
        $article->update($data);
        return redirect()->route('articles.index')->with('success', 'Article modifié avec succès.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Article $article)
    {
        $this->authorize('delete', $article);
        $article->delete();
        return redirect()->route('articles.index')->with('success', 'Article supprimé avec succès.');
    }
}
