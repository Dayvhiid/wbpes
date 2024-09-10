<?php

namespace App\Http\Controllers;

use App\Models\Chapter;
use Illuminate\Http\Request;

class FeedBackController extends Controller
{
    //
    public function FeedBackController(){

    }

    public function store(Request $request)
    {
        // Validate the request
        $request->validate([
            'student_id' => 'required',
            'feedback' => 'required|string',
        ]);

        // Retrieve the student record
        $student = Chapter::findOrFail($request->input('student_id'));
        
        // Update the feedback
        $student->feedback = $request->input('feedback');
        $student->save();
        
        // Redirect back with success message
        return redirect()->route('status.status')->with('msg', 'Feedback updated successfully.');
    }
}
