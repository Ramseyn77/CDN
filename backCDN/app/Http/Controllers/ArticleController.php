<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $articles = Article::all() ;
        return response()->json([
            'articles' => $articles
        ],200) ;
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'numero' => 'required|unique:articles',
            'nom' => 'required' ,
            'contenu' => 'required'
        ]) ;

        try {
            Article::create($request->all()) ;
            return response()->json([
                'message' => 'Article created'
            ], 200) ;
        } catch (\Exception $e) {
            return response()->json([
                'message' => 'Problem with this ressource'
            ], 500) ;
        }
    }

    public function comments($id){
        $article = Article::findOrFail($id) ;
        $comments=  $article->comments()->with('user')->get();
        return response()->json([
            'comments' => $comments
        ],200) ;
    }

    public function events($id) {
        $article = Article::findOrFail($id) ;
        $events = $article->events()->with('user')->get() ;
        return response()->json([
            'events' => $events
        ],200) ;
    }

    /**
     * Display the specified resource.
     */
    public function show($article)
    {
        $atcl = Article::findOrFail($article) ;
        if($atcl){
            return response()->json([
                'article' => $atcl
            ],200) ;
        }else{
            return response()->json([
                'message' => 'Article not found'
            ],500) ;
        }
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
