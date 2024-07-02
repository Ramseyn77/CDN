<?php

namespace App\Http\Controllers;

use App\Models\Titre;
use Illuminate\Http\Request;

class TitreController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $titres = Titre::all() ;
        return response()->json([
            'titres' => $titres,
        ],200) ;
    }

    public function livre($id){
        $titre = Titre::findOrFail($id) ;
        $livre = $titre->livre ;
        return response()->json([
            'livre' => $livre ,
        ],200) ;
    }

    public function chapitres($id){
        $titre = Titre::findOrFail($id) ;
        $chapitres = $titre->chapitres ;
        return response()->json([
            'chapitres' => $chapitres ,
        ],200) ;
    }
    public function articles($id){
        $titre = Titre::findOrFail($id) ;
        $articles = $titre->articles ;
        return response()->json([
            'articles' => $articles ,
        ],200) ;
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
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
    public function show($titre)
    {
        $tit = Titre::findOrFail($titre) ;
        if ($tit) {
            return response()->json([
                'titre' => $tit
            ],200) ;
        }
        return response()->json([
            'message' => 'Problème avec la ressource'
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
