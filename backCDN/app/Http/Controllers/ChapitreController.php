<?php

namespace App\Http\Controllers;

use App\Models\Chapitre;
use Illuminate\Http\Request;

class ChapitreController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $chapitres = Chapitre::all() ;
        return response()->json([
            'chapitres' => $chapitres
        ],200) ;
    }

    public function articles($id){
        $chapitre = Chapitre::findOrFail($id) ;
        $articles = $chapitre->articles ;
        return response()->json([
            'articles' => $articles
        ],200) ;
    }
    public function livre($id){
        $chapitre = Chapitre::findOrFail($id) ;
        $livre = $chapitre->livre ;
        return response()->json([
            'livre' => $livre
        ],200) ;
    }
    public function titre($id){
        $chapitre = Chapitre::findOrFail($id) ;
        $titre = $chapitre->titre ;
        return response()->json([
            'titre' => $titre
        ],200) ;
    }

    public function sections($id)
    {
        $chapitre = Chapitre::findOrFail($id) ;
        $sections = $chapitre->sections ;   
        return response()->json([
            'sections' => $sections
        ],200) ;
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show($chapitre)
    {
        $chp = Chapitre::findOrFail($chapitre) ;
        if ($chp) {
            return response()->json([
                'chapitre' => $chp,
            ],200) ;
        }
        return response()->json([
            'message' => 'Problème avec la ressoucre ',
        ],500) ;
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
