<?php

namespace App\Http\Controllers;

use App\Models\Chapter;
use Illuminate\Http\Request;

class EvaluationController extends Controller
{
    //
    // public function index(Chapter $chapter, $evaluation_id){
    //     $matricNo = session('matric_no');
    //     $chapter = Chapter::where('matric_no', session('matric_no'))->first();
    //     return view('student.evaluation', ['chapter' => $chapter]);
    // }

    public function index(Chapter $chapter, $evaluation_id){
         $chapter = Chapter::where('id', $evaluation_id)->first();
        // $chapter = Chapter::find($evaluation_id);
        return view('student.evaluation', ['chapter' => $chapter]);
    }
}
