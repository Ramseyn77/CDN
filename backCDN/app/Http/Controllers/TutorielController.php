<?php

namespace App\Http\Controllers;

use App\Models\Tutoriel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class TutorielController extends Controller
{
    public function index() {
        $tutoriels = Tutoriel::all() ;
        return response()->json([
            'tutoriels' => $tutoriels,
        ], 200) ;
    }

    public function show($tutoriel) {
        $tuto = Tutoriel::findOrFail($tutoriel) ;
        if ($tuto) {
            return response()->json([
                'tutoriel' => $tuto,
            ], 200) ;
        } else {
            return response()->json([
                'message' => 'Tutoriel not found',
            ], 500) ;
        }
    }

    public function store(Request $request) {
        $validator = Validator::make($request->all(), [
            'titre' => 'required|string',
            'contenu' => 'required|string'
        ]) ;
        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()], 422);
        }
        try {
            $tuto = Tutoriel::create($request->all()) ;
            return response()->json(['message' => 'Tutoriel created', 'tutoriel' => $tuto], 200) ;
        } catch (\Exception $e) {
            return response()->json([
                'message' => 'Tutoriel not create',
            ], 500) ;
        }
    }
}
