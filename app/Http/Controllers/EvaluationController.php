<?php

namespace App\Http\Controllers;

use App\Models\Chapter;
use Illuminate\Http\Request;

class EvaluationController extends Controller
{
    //
    public function index(Chapter $chapter){
        $matricNo = session('matric_no');
        $chapter = Chapter::where('matric_no', $matricNo)->get();
        return view('student.evaluation', ['chapter' => $chapter]);
    }
}
