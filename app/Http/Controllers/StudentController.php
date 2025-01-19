<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Student;
use Illuminate\Http\Request;
use App\Models\studentBioData;
use Symfony\Contracts\Service\Attribute\Required;

class StudentController extends Controller
{
    public function index(){
        return view('student.studentSignUp');
    }

    public function store(Request $request){
        $data = $request->validate([
            'name' => 'required',
            'password' => 'required',
            'confirm_password' => 'required',
            'email' => 'required'
            // 'matric_no' => 'required'
        ]);
         $name = $data['name'];
         $password = $data['password'];
         $confirm_password = $data['confirm_password'];
         $email = $data['email'];
        //  $search = Doctor::all();
         $search = Student::where('name', $name)->get(); // Find names that start with "category"
         if($search->isEmpty()){//change back to search
            if($password == $confirm_password){
                $hashedPassword = bcrypt($password);
                $register = new Student();
                $register->name = $name;
                $register->password = $hashedPassword;
                $register->email = $email;
                $user = new User();
                $user->name = $name;
                $user->email = $email;
                $user->password = $password;
                $register->save();
                $user->save();
                return redirect(route('status.status'))->with('msg','account created sucesfully'); 
             } else {
                return redirect(route('status.status'))->with('msg','Passwords do not match'); 
             }
         }else {
            return redirect(route('status.status'))->with('msg','User Already Exists'); 
         }
        // return view('doctors.signup');
    }

    public function submition(Student $student){
        return view('student.welcome', ['student' => $student]);
    }

   
    public function welcome(){
        return view('student.welcome');
    }

    public function check(Request $request) 
{
    // This function handles the signing in logic
    $data = $request->validate([
        'name' => 'required',
        'password' => 'required',
    ]);

    // Search for the student by name
    $search = Student::where('name', $data['name'])->get();
    if ($search->isEmpty()) {
        // No results found
        return redirect(route('status.status'))->with('msg', 'Invalid Input details');
    } else {
        // Handle results (process $search)
        $student = $search->first();
        
        if (password_verify($data['password'], $student->password)) {
            // Password is correct
            if (is_null($student->course)) {
                // Matric number is NULL, redirect to the student forms
                return redirect(route('student.forms'));
            } else {
                // Matric number is not NULL, show the welcome view
                // return view('student.welcome', ['student' => $student]);
                session(['matric_no' => $student->matric_no]);
                session(['project_supervisor' => $student->project_supervisor]);
                return redirect(route('student.welcome',['student' => $student]));
            }
        } else {
            // Password is incorrect
            return redirect(route('status.status'))->with('msg', 'Wrong Password');
        }
    }
}


   

    public function profile()
    {
        // Retrieve the matric number from the session
        $matricNo = session('matric_no');
    
        // Find the student by matric number
        $student = Student::where('matric_no', $matricNo)->first();
        $student->project_supervisor = session('project_supervisor');
    
        // Check if the student exists
        if (!$student) {
            return redirect()->back()->with('error', 'Student not found.');
        }
    
        // Pass the student data to the view
        return view('student.profile', compact('student'));
    }
    

    public function studentForms(){
        return view('student.studentForms');
    }
    public function save(Request $request){
     
        // storing matric number and project supervisor to session
        $matricNo = $request->input('matric_no');
        $project_supervisor = $request->input('project_supervisor');
        $fullname = $request->input('fullname');
        session(['matric_no' => $matricNo]);
        session(['project_supervisor' => $project_supervisor]);
        session(['fullname' => $fullname]);
      

     // Find the student by matric number
    // Find the student by matric number
     $student = Student::where('matric_no', $matricNo)->first();

if ($student) {
    // Update the retrieved student instance
    $student->update([
        'fullname' => $request->input('fullname'),
        'course' => $request->input('course'),
        'matric_no' => $request->input('matric_no'),
        'project_supervisor' => $request->input('project_supervisor'),
        'fullname' => $request->input('fullname'),
        // 'gender' => $request->input('gender'),
        'project_topic' => $request->input('project_topic'),
    ]);

    // Redirect to the welcome route with the student's ID
    return redirect(route('student.welcome', ['student' => $student->id]));
} else {
    echo "Student with matric number '$matricNo' not found.";
    $student->update();
}

// For handling general errors
$student = Student::where('matric_no', $matricNo)->first();
if ($student) {
    return redirect(route('student.welcome', ['student' => $student->id]));
    echo "An error occurred while updating student data.";
    // report($e); // For logging or further debugging
}

    }
}
