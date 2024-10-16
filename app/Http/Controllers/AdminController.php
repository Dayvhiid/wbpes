<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function signup(){
        return view('admin.signup');
    }

    public function dashboard(){
        return view('admin.dashboard');
    }
}
