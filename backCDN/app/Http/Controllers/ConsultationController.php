<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ConsultationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $consultations = DB::table('user_article')->get() ;
        return response()->json([
            'consultations' => $consultations
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
       try {
        $request->validate([
            'user_id' => 'required',
            'article_id' => 'required'
        ]) ;
        DB::table('user_article')->insert([
            'user_id' =>$request ->user_id,
            'article_id' => $request->article_id
        ]) ;
        return response()->json([
            'message' => "Success to insert in database"
        ], 200) ;
       } catch (\Exception $e) {
        return response()->json([
            'message' => "Problem to insert in database"
        ], 500) ;
       }
    }

    /**
     * Display the specified resource.
     */
    public function show($consultation)
    {
        $cslt = DB::table('user_article')->where('id',$consultation )->first() ;
        if($cslt){
            return response()->json([
                'consultation' => $cslt
            ],200) ;
        }else {
            return response()->json([
                'message' => 'Consultation not found'
            ],500) ;
        }
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
