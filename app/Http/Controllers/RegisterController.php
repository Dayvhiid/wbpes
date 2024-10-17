<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
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
         $search = Admin::where('name', $name)->get(); // Find names that start with "category"
         if($search->isEmpty()){//change back to search
            if($password == $confirm_password){
                $hashedPassword = bcrypt($password);
                $register = new Admin();
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

    // public function check(Request $request){
    //     //This function handles the signing in logic
    //     $data = $request->validate([
    //         'name' => 'required',
    //         'password' => 'required',
    //     ]);
    //     $search = Admin::where('name', $data['name'])->get();
    //     if (count($search) === 0) {
    //         // No results found
    //         return redirect(route('status.status'))->with('msg','Invalid Input details'); 
    //     } else {
    //         // Handle results (process $search)
    //         if(password_verify($data['password'], $search[0]['password'])){
    //             // return redirect(route('pages.register'));
    //             error_log('Password Correct');
    //             return redirect(route('admin.dashboard'));
    //       } else {
    //           error_log('Password Incorrect');
    //           return redirect(route('status.status'))->with('msg','Wrong Password'); 
    //       }
    //     }

    // }
    public function check(Request $request)
{
    // This function handles the signing in logic
    $data = $request->validate([
        'name' => 'required',
        'password' => 'required',
    ]);

    // Search for the admin by name
    $search = Admin::where('name', $data['name'])->first(); // Use first() instead of get()

    if (!$search) {
        // No results found
        return redirect(route('status.status'))->with('msg', 'Invalid Input details');
    } else {
        // Handle results (process $search)
        if (password_verify($data['password'], $search->password)) {
            // Password is correct, save the user's name to the session
            session(['user_name' => $search->name]); // Save the name to session
            error_log('Password Correct');
            return redirect(route('admin.dashboard'));
        } else {
            error_log('Password Incorrect');
            return redirect(route('status.status'))->with('msg', 'Wrong Password');
        }
    }
}

}
