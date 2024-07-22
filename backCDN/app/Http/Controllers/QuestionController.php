<?php

namespace App\Http\Controllers;

use App\Models\Question;
use Illuminate\Http\Request;

class QuestionController extends Controller
{
    public function index(){
        $questions = Question::all() ;
        return response()->json([
            'questions' => $questions ,
        ], 200) ;
    }

    public function show($question){
        $qst = Question::findOrFail($question) ;
        return response()->json([
            'question' => $qst,
        ],200) ;
    }

    public function reponses($id){
        $qst = Question::findOrFail($id) ;
        $reponses = $qst->reponses ;
        return response()->json([
            'reponses' => $reponses ,
        ], 200) ;
    }

}
