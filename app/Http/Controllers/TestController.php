<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class TestController extends Controller
{
    //
    public function index(){
        return view('test');
    }



public function login(Request $request)
{
    // Retrieve the email and password from the session
    $email = Session::get('user_email');
    $password = Session::get('user_password');

    // Perform the authentication logic (e.g., using Laravel's Auth system)
    if ($email && $password) {
        // Check if the user exists with the session email
        $user = User::where('email', $email)->first();

        // Validate password
        if ($user && Hash::check($password, $user->password)) {
            // Log the user in
            Auth::login($user);
            return redirect()->route('chats'); // Redirect to the chats page
        }
    }

    // If authentication fails, redirect to login with an error
    return redirect()->route('login')->withErrors(['email' => 'Invalid credentials']);
}

}
