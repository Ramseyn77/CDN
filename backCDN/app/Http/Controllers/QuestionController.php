<?php

namespace App\Http\Controllers;

use App\Models\Question;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

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

    public function store(Request $request) {

        $validator = Validator::make($request->all(), [
            'contenu' => 'required|string', 
            'article_id' => 'required', 
            'status' => 'required' ,
        ]) ;
        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()], 422);
        }
        try {                
            $question = Question::create($request->all()) ;

            return response()->json([
                'message' => 'suscessfully created',
                'question' => $question
            ], 200) ;
        } catch (\Exception $e) {
            return response()->json([
                'message' => 'Error in code'
            ], 500) ;
        }
    }

}
