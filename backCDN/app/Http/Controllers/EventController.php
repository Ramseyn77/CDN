<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;

class EventController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $events = Event::all() ;
        return response()->json([
            'faits' => $events
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
            Event::create($request->all()) ;
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
    public function show($event)
    {
        $evt = Event::findOrFail($event) ;
        if ($evt) {
            return response()->json([
                'event' => $evt
            ],200) ;
        } else {
            return response()->json([
                'message' => 'Event not found'
            ],500) ;
        }
        
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Event $event)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Event $event)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Event $event)
    {
        //
    }
}
