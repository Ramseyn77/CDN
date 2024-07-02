<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $comments = Comment::all() ;
        return response()->json([
            'comments' => $comments
        ],200);
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
            'contenu' => 'required|string' ,
            'user_id' => 'required',
            'article_id' => 'required'
        ]) ;
        Comment::create($request->all()) ;
        return response()->json([
            'message' => 'Successfully inserting'
        ],200) ;
       } catch (\Exception $e) {
        return response()->json([
            'message' => 'Something Went wrong'
        ],500) ;
       }
    }

    /**
     * Display the specified resource.
     */
    public function show($comment)
    {
        $cmt = Comment::findOrFail($comment) ;
        if ($cmt) {
            return response()->json([
                'comment' => $cmt
            ],200) ;
        }else{
            return response()->json([
                'message' => 'Comment not found'
            ],500) ;
        }
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Comment $comment)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Comment $comment)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Comment $comment)
    {
        //
    }
}
