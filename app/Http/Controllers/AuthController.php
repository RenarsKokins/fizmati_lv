<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    function showLogin(){
        return view('login');
    }
    function showRegister(){
        return view('register');
    }
}
