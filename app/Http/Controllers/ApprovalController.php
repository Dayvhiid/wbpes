<?php

namespace App\Http\Controllers;

use App\Models\Chapter;
use App\Models\Student;
use Illuminate\Http\Request;

class ApprovalController extends Controller
{
    public function update(Request $request)
{
    $request->validate([
        'student_id' => 'required|exists:students,id',
        'chapterOneApproval' => 'required|string'
    ]);

    Chapter::where('id', $request->student_id)->update([
        'chapterOneApproval' => $request->chapterOneApproval
    ]);

    return redirect(route('status.status'))->with('msg','Approval status updated successfully'); 
}

  public function updateTwo(Request $request){
    $request->validate([
        'student_id' => 'required|exists:students,id',
        'chapterTwoApproval' => 'required|string'
    ]);

    Chapter::where('id', $request->student_id)->update([
        'chapterTwoApproval' => $request->chapterTwoApproval
    ]);

    return redirect(route('status.status'))->with('msg','Approval status updated successfully');
  }

  public function updateThree(Request $request){
    $request->validate([
        'student_id' => 'required|exists:students,id',
        'chapterThreeApproval' => 'required|string'
    ]);

    Chapter::where('id', $request->student_id)->update([
        'chapterThreeApproval' => $request->chapterThreeApproval
    ]);

    return redirect(route('status.status'))->with('msg','Approval status updated successfully');
  }

  public function updateFour(Request $request){
    $request->validate([
        'student_id' => 'required|exists:students,id',
        'chapterFourApproval' => 'required|string'
    ]);

    Chapter::where('id', $request->student_id)->update([
        'chapterFourApproval' => $request->chapterFourApproval
    ]);

    return redirect(route('status.status'))->with('msg','Approval status updated successfully');
  }

  public function updateFive(Request $request){
    $request->validate([
        'student_id' => 'required|exists:students,id',
        'chapterFiveApproval' => 'required|string'
    ]);

    Chapter::where('id', $request->student_id)->update([
        'chapterFiveApproval' => $request->chapterFiveApproval
    ]);

    return redirect(route('status.status'))->with('msg','Approval status updated successfully');
  }

  public function checkCertificate(){
    //  $chapter = Chapter::where('fullname', auth()->user()->name)->first();

    //  if ($chapter->chapterOneApproval == 'pending'){
    //     return redirect(route('status.status'))->with('msg','Project Still Under Evaluation');
    //  } 
    // return view('student.certificate', compact('chapter'));

    return view('student.certificate');
}
}
