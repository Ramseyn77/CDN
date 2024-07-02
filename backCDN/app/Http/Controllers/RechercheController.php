<?php

namespace App\Http\Controllers;

use App\Models\Recherche;
use Illuminate\Http\Request;

class RechercheController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
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
        $request->validate([
            'user_id' => 'required',
            'mot' => 'required|string'
        ]) ;
        try {
            Recherche::create($request->all()) ;
            return response()->json([
                'message' => 'Successfully registred'
            ], 200) ;
        } catch (\Exception $e) {
            return response()->json([
                'message' => 'Error whith ressources'.$e->getMessage()
            ], 500) ;
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
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
