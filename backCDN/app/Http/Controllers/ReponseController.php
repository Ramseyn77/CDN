<?php

namespace App\Http\Controllers;

use App\Models\Reponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ReponseController extends Controller
{
    public function index(){
        $reponses = Reponse::all() ;
        return response()->json([
            'reponses' => $reponses ,
        ], 200) ;
    }

    public function show($reponse){
        $rsp = Reponse::findOrFail($reponse) ;
        return response()->json([
            'reponse' => $rsp,
        ],200) ;
    }

    public function store(Request $request){

        $validator  = Validator::make($request->all(), [
            'contenu' => 'required|string', 
            'question_id' => 'required',
            'status' => 'required'
        ]) ;
        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()], 422);
        }
        try {                
            $reponse = Reponse::create($request->all()) ;

            return response()->json([
                'message' => 'suscessfully created',
                'question' => $reponse
            ], 200) ;
        } catch (\Exception $e) {
            return response()->json([
                'message' => 'Error in code'
            ], 500) ;
        }
    }
}
