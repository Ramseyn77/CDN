<?php

namespace App\Http\Controllers;

use App\Models\Livre;
use Illuminate\Http\Request;

class LivreController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $livres = Livre::all() ;
        return response()->json([
            'livres' => $livres 
        ],200) ;
    }

    public function chapitres($id){
        $livre = Livre::findOrFail($id) ;
        $chapitres = $livre->chapitres ;
        return response()->json([
            'titres' => $chapitres
        ],200) ;
    }
    public function titres($id){
        $livre = Livre::findOrFail($id) ;
        $titre_list = $livre->titres ;
        return response()->json([
            'titres' => $titre_list
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
    public function show($livre)
    {
        $liv = Livre::findOrFail($livre) ;
        if ($liv) {
            return response()->json([
                'livre' => $liv
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
