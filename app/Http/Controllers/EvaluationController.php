<?php

namespace App\Http\Controllers;

use App\Models\Chapter;
use Illuminate\Http\Request;

class EvaluationController extends Controller
{
    //
    public function index(Chapter $chapter){
        $chapter = Chapter::where('matric_no', session('matric_no'))->get();
        return view('student.evaluation', ['chapter' => $chapter]);
    }
}
