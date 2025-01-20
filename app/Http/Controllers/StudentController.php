<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Student;
use Illuminate\Http\Request;
use App\Models\studentBioData;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Symfony\Contracts\Service\Attribute\Required;

class StudentController extends Controller
{
    public function index(){
        notify()->success('Laravel Notify is awesome!');
        return view('student.studentSignUp');
    }

    public function store(Request $request){
        $data = $request->validate([
            'name' => 'required',
            'password' => 'required',
            'email' => 'required',
            'matric_no' => 'required'
        ]);
         $name = $data['name'];
         $password = $data['password'];
         $email = $data['email'];
         $matric_no = $data['matric_no'];

         $search = Student::where('name', $name)->get(); // Find names that start with "category"
         if($search->isEmpty()){//change back to search
            if($password == $password){
                $hashedPassword = bcrypt($password);
                $register = new Student();
                $register->name = $name;
                $register->password = $hashedPassword;
                $register->email = $email;
                $register->matric_no = $matric_no;
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
        // notify()->success('Laravel Notify is awesome!');
        // return view('student.welcome', ['student' => $student]);
        return view('student.welcome', ['student' => $student])->with('success', notify()->success('Laravel Notify is awesome!'));
    }

   
    public function welcome(){
        notify()->success('Laravel Notify is awesome!');
        return view('student.welcome');
    }

//     public function check(Request $request) 
// {
//     // This function handles the signing in logic
//     $data = $request->validate([
//         'email' => 'required',
//         'password' => 'required',
//     ]);

//     // Search for the student by name
//     $search = Student::where('email', $data['email'])->get();
//     if ($search->isEmpty()) {
//         // No results found
//         return redirect(route('status.status'))->with('msg', 'Invalid Input details');
//     } else {
//         // Handle results (process $search)
//         $student = $search->first();
        
//         if (password_verify($data['password'], $student->password)) {
//             // Password is correct
//             if (is_null($student->course)) {
//                 // Matric number is NULL, redirect to the student forms
//                 return redirect(route('student.forms'));
//             } else {
//                 // Matric number is not NULL, show the welcome view
//                 // return view('student.welcome', ['student' => $student]);
//                 session(['matric_no' => $student->matric_no]);
//                 session(['project_supervisor' => $student->project_supervisor]);
//                 return redirect(route('student.welcome',['student' => $student]));
//             }
//         } else {
//             // Password is incorrect
//             return redirect(route('status.status'))->with('msg', 'Wrong Password');
//         }
//     }
// }



public function check(Request $request) 
{
    // Validate input data
    $data = $request->validate([
        'email' => 'required|email',
        'password' => 'required',
    ]);

    // Search for the student in the 'students' table by email
    $student = Student::where('email', $data['email'])->first();

    // Search for the user in the 'users' table by email
    $user = User::where('email', $data['email'])->first();

    if ($student) {
        // Check if the password matches the student's password
        if (Hash::check($data['password'], $student->password)) {
            // Password is correct for the student
            // Log::info('Student login successful', ['email' => $student->email]);
            return redirect(route('student.welcome',['student' => $student]));

            // Handle course checks for students
            if (is_null($student->course)) {
                return redirect(route('student.forms'));
                // Log::info('Student is missing a course. Redirecting to forms page', ['email' => $student->email]);

                // Return a JSON response for missing course
                return response()->json([
                    'message' => 'Student login successful. Missing course. Fill out forms.',
                    'student' => $student
                ], 200);
            } else {
                // Save relevant session data for the student
                session(['matric_no' => $student->matric_no]);
                session(['project_supervisor' => $student->project_supervisor]);

                Log::info('Student login successful and has a course', [
                    'email' => $student->email,
                    'matric_no' => $student->matric_no,
                    'project_supervisor' => $student->project_supervisor
                ]);

                return response()->json([
                    'message' => 'Student login successful and has a course',
                    'student' => $student
                ], 200);
            }
        } else {
            // Incorrect password for student
            Log::error('Student login failed due to wrong password', ['email' => $data['email']]);
            return response()->json(['message' => 'Invalid email or password for student'], 401);
        }
    } elseif ($user) {
        // Check if the password matches the user's password in the 'users' table
        if (Hash::check($data['password'], $user->password)) {
            // Log the user in
            Auth::login($user);

            Log::info('User login successful', ['email' => $user->email]);

            return response()->json([
                'message' => 'User login successful',
                'user' => $user
            ], 200);
        } else {
            // Incorrect password for user
            Log::error('User login failed due to wrong password', ['email' => $data['email']]);
            return response()->json(['message' => 'Invalid email or password for user'], 401);
        }
    } else {
        // No student or user found with the provided email
        Log::error('Login failed. No account found with the provided email', ['email' => $data['email']]);
        return response()->json(['message' => 'No account found with the provided email'], 404);
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
