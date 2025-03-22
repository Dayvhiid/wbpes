<?php

namespace App\Http\Controllers;

use Illuminate\Support\Str;
use Illuminate\Http\Request;

class VideoController extends Controller
{
    //
    public function index(){
        return view('welcome');
    }

    public function createRoom()
    {
        $roomNumber = 'RM' . Str::random(12); // Generate unique room ID
        // Store room details in DB if needed
        return response()->json(['roomNumber' => $roomNumber]);
    }


    public function joinRoom(Request $request)
{
    $roomNumber = $request->roomNumber;
    
    // Verify if room exists (implement actual room storage)
    $roomExists = true; // Replace with actual DB check

    if ($roomExists) {
        return response()->json(['success' => true, 'roomNumber' => $roomNumber]);
    } else {
        return response()->json(['success' => false, 'message' => 'Room not found'], 404);
    }
}

   public function displayCreateRoom(){
    return view();
   }
}
