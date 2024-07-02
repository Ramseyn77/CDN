<?php

namespace App\Http\Controllers;

use App\Models\Section;
use Illuminate\Http\Request;

class SectionController extends Controller
{
    public function index(){
        $sections = Section::all() ;
        return response()->json([
            'sections' => $sections
        ],200) ;
    }

    public function show($section) {
        $sct = Section::findOrFail($section) ;
        if ($sct) {
            return response()->json([
                'section' => $sct
            ],200) ;
        }
        return response()->json([
            'message' => 'Un probéme avec la section'
        ],500) ;
    }
}
