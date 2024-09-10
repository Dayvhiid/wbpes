<?php

namespace App\Http\Controllers;

use App\Models\Chapter;
use Illuminate\Http\Request;

class ChapterController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
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
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Chapter $chapter)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Chapter $chapter)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Chapter $chapter)
    {
        // Validate the incoming request data
        $request->validate([
            'status' => 'required|string',
            'chapter_id' => 'required|integer|exists:chapters,id', // Assuming you are passing chapter_id
        ]);

        // Find the chapter by id
        $chapter = Chapter::findOrFail($request->input('chapter_id'));

        // Update the status
        $chapter->status = $request->input('status');
        $chapter->save();


        return redirect(route('status.status'))->with('msg','Invalid Input details');
       
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Chapter $chapter)
    {
        //
    }
}
