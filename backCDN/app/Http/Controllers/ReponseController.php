<?php

namespace App\Http\Controllers;

use App\Models\Reponse;
use Illuminate\Http\Request;

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
}
