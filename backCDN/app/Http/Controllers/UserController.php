<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

   
    public function consultations($id)
    {
        $user = User::findOrFail($id) ;
        $articles = $user->consultations ;
        return response()->json([
            'articles' => $articles
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
    public function show($user)
    {
        $usr = User::findOrFail($user) ; 
        if ($usr) {
            return response()->json([
                'user' => $usr
            ],200) ;
        }
        return response()->json([
            'message' => 'User not found'
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
