<?php

namespace App\Http\Controllers;

use App\Http\Controllers\StudentData as ControllersStudentData;
use App\Models\GroupStudent;
use App\Models\Regstudent;
use App\Models\User;
use App\Models\Student;
use Illuminate\Http\Request;
use App\Models\studentBioData;
use App\Models\studentData;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Symfony\Contracts\Service\Attribute\Required;

class StudentController extends Controller
{
    public function index(){
        // notify()->success('Laravel Notify is awesome!');
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
                // return redirect(route('status.status'))->with('msg','account created sucesfully'); 

                // notify()->success('Please Sign In');
                return redirect(route('student.index'));
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
        // notify()->success('Laravel Notify is awesome!');
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

    // Check if the email belongs to a student
    if ($student) {
        // Verify the password
        if (Hash::check($data['password'], $student->password)) {
            // Log the student in manually using session
            session(['student_id' => $student->id]);

            // Check if the student is missing a course
            if (is_null($student->course)) {
                // Redirect to the forms page to fill in the course
                Auth::login($user);
                return redirect()->route('student.welcome', ['student' => $student]);
            } else {
                // Save relevant session data for the student
                session(['matric_no' => $student->matric_no]);
                session(['project_supervisor' => $student->project_supervisor]);

                // Redirect to the student welcome page
                Auth::login($user);
                return redirect()->route('student.welcome', ['student' => $student]);
            }
        } else {
            // Incorrect password for student
            return back()->withErrors(['password' => 'Invalid email or password for student']);
        }
    } 
    
    // Check if the email belongs to a user
    elseif ($user) {
        // Verify the password and log the user in
        if (Hash::check($data['password'], $user->password)) {
            Auth::login($user);

            // Redirect to the dashboard or home page
            return redirect()->route('home');
        } else {
            // Incorrect password for user
            return back()->withErrors(['password' => 'Invalid email or password for user']);
        }
    } 
    
    // If no student or user is found with the provided email
    else {
        return back()->withErrors(['email' => 'No account found with the provided email']);
    }
}

   

    // public function profile()
    // {
    //     //Retrieve the matric number from the session
    //     $matricNo = session('matric_no');
    
    //     // Find the student by matric number
    //     $student = Regstudent::where('email', auth()->user()->email)->first();
    //     $results = GroupStudent::where('name',auth()->user()->name)->first();

    //     if (!$student) {
    //         return redirect()->back()->with('error', 'Student not found.');
    //     }
    
    //   //  Pass the student data to the view
    //     return view('student.profile', compact('student', 'results'));
    // }


    public function profile()
    {
        // Retrieve the matric number from the session
        $matricNo = session('matric_no');
    
        // Find the student by email
        $student = Regstudent::where('email', auth()->user()->email)->first(); //good
        $results = GroupStudent::where('name', auth()->user()->name)->first();
    
        if (!$student) {
            return redirect()->back()->with('error', 'Student not found.');
        }

        
        // Find all students in the same group
        // $groupStudents = GroupStudent::where('group_name', $results->group_name);    


        if ($results && isset($results->group_name)) {
            $groupStudents = GroupStudent::where('group_name', $results->group_name)->get();
            } else {
                // Handle the case where $results is null
                return redirect(route('status.status'))->with('msg', 'Please Wait for the Admin to assign you a group');
            }

    
        // Pass the student data and group students to the view
        return view('student.profile', compact('student', 'results', 'groupStudents'));
    }
    

    public function studentForms(){
        return view('student.studentForms');
    }

    public function studentDataForm(){
        return view('student.studentData');
    }

    public function certificate(){
        return view('student.certificate');
    }


    // public function studentSave(Request $request){

    //     $user = Auth::user();

    //     $studentData = new Regstudent();
    //     $studentData->name = $request->input('name');
    //     $studentData->user_id = auth()->user()->id;
    //     $studentData->matricNo = $request->input('matricNo');
    //     $studentData->email = auth()->user()->email;
    //     $studentData->phone_number = $request->input('phone_number');
    //     $studentData->department = $request->input('department');
    //     $studentData->project_title = $request->input('project_title');
    //     $studentData->gender = $request->input('gender');
    //     $studentData->save();

    // }


    public function studentSave(Request $request)
{
    // Validate the input data
    $request->validate([
        'name' => 'required|string|max:255',
    //   'matricNo' => 'required|unique:student_data,matric_no',
        'phone_number' => 'nullable|string|max:15',
        'department' => 'nullable|string|max:100',
        'project_title' => 'nullable|string|max:255',
        'gender' => 'nullable|string|max:10',
        'cgpa' => 'nullable|string|max:10',
    ]);

    // Get the current authenticated user's ID and email

    $userId = auth()->user()->id;
    $user_email = auth()->user()->email;

    // Update if name exists, otherwise create new record
    $studentData = Regstudent::updateOrCreate(
        ['name' => $request->input('name')], // Check if name exists
        [
            'name' => $request->input('name'),
            'user_id' => $userId,
            'matricNo' => $request->input('matricNo'),
            'email' => $user_email,
            'phone_number' => $request->input('phone_number'),
            'department' => $request->input('department'),
            'project_title' => $request->input('project_title'),
            'gender' => $request->input('gender'),
            'cgpa' => $request->input('cgpa'),
        ]
    );


    $studentData = studentData::updateOrCreate(
        ['name' => $request->input('name')], // Check if name exists
        [
            'name' => $request->input('name'),
            'user_id' => $userId,
            // 'matricNo' => $request->input('matricNo'),
            'email' => $user_email,
            'phone_number' => $request->input('phone_number'),
            'department' => $request->input('department'),
            'project_title' => $request->input('project_title'),
            'gender' => $request->input('gender'),
            'cgpa' => $request->input('cgpa'),
        ]
    );

    // Return a response
    notify()->success('Your data has been captured succefully.');
    return view('student.studentData');
   
    // return response()->json([
    //     'message' => 'Record saved successfully.',
    //     'data' => $studentData
    // ], 200);
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
