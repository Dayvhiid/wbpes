<?php

namespace App\Http\Controllers;

use App\Models\Chapter;
use App\Models\Student;
use App\Models\Supervisor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;


class SupervisorController extends Controller
{
    
    public function index (){
        return view('supervisor.index');
    }
    public function form(){
        return view('supervisor.supervisorForms');
    }
    
    public function welcome(Chapter $chapter){
        // $chapter = Chapter::where('project_supervisor', session('name'))->get();
        return view('supervisor.welcome', ['chapter' => $chapter]);
    }

    public function store(Request $request){
        $data = $request->validate([
            'name' => 'required',
            'password' => 'required',
            'confirm_password' => 'required'
        ]);
         $name = $data['name'];
         $password = $data['password'];
         $confirm_password = $data['confirm_password'];
        //  $search = Doctor::all();
         $search = Supervisor::where('name', $name)->get(); // Find names that start with "category"
         if($search->isEmpty()){//change back to search
            if($password == $confirm_password){
                $hashedPassword = bcrypt($password);
                $register = new Supervisor();
                $register->name = $name;
                $register->password = $hashedPassword;
                $register->save();
                return redirect(route('status.status'))->with('msg','account created sucesfully'); 
             } else {
                return redirect(route('status.status'))->with('msg','Passwords do not match'); 
             }
         }else {
            return redirect(route('status.status'))->with('msg','User Already Exists'); 
         }
        // return view('doctors.signup');
    }

    public function check(Request $request, Chapter $chapter){
        //This function handles the signing in logic
        $data = $request->validate([
            'name' => 'required',
            'password' => 'required',
        ]);
        $search = Supervisor::where('name', $data['name'])->get();

        if (count($search) === 0) {
            // No results found
            return redirect(route('status.status'))->with('msg','Invalid Input details'); 
        } else {
            // Handle results (process $search)
            if(password_verify($data['password'], $search[0]['password'])){
                session(['name' => $data['name']]);
                if ($search[0]['department']){
                    $chapter = Chapter::where('project_supervisor', $data['name'])->get();
                    return view('supervisor.welcome',['chapter' => $chapter]);
                }else {
                    return redirect(route('supervisor.form'));
                }
          } else {
              error_log('Supervisor Password Incorrect');
              return redirect(route('status.status'))->with('msg','Wrong Password'); 
          }
          //code segment to check if the orther detail for the supervisor has been filled
          //so we dont have to render the form page if the user has filled it previously
        }

    }

    public function save(Request $request, Chapter $chapter){
     
        // storing matric number and project supervisor to session
        $idNo = $request->input('id_no');
        $fullname = $request->input('fullname');
        $department = $request->input('department');
        // session(['project_supervisor' => $project_supervisor]);
      

     // Find the student by matric number
    // Find the student by matric number
        $supervisorName = session('name');
        $chapter = Chapter::where('project_supervisor', $supervisorName)->get();
        $supervisor = Supervisor::where('name', $supervisorName)->first();

        if ($supervisor) {
            // Update the retrieved student instance
            $supervisor->update([
                'fullname' => $request->input('fullname'),
                'department' => $request->input('department'),
                'id_no' => $request->input('id_no'),       
                // 'gender' => $request->input('gender'),
            ]);

            // Redirect to the welcome route with the name
            // return redirect(route('supervisor.welcome', ['chapter' => $chapter]));
            return view('supervisor.welcome',['chapter' => $chapter]);
        } else {
            echo "Student with matric number '$' not found.";
            // $supervisor->update();
        }

// For handling general errors
// $student = Student::where('matric_no', $matricNo)->first();
// if ($student) {
//     return redirect(route('student.welcome', ['student' => $student->id]));
//     echo "An error occurred while updating student data.";
//     // report($e); // For logging or further debugging
// }

    }


    function SupervisorFix(Supervisor $chapter){
        return view('supervisor.welcomeTwo', ['chapter' => $chapter]);
    }

    function feedback($student_id){
        $student = Chapter::findOrFail($student_id);
        return view('supervisor.feedback', compact('student'));
    }

    function feedbackSave(){
        
    }

   

    
}


// if ($search[0]['department']){
//     $chapter = Supervisor::where('name', $data['name'])->get();
//     return view('supervisor.welcome',['chapter' => $chapter]);
// }else {
//     return redirect(route('supervisor.form'));
// }
