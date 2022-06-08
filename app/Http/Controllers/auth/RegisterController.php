<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Hash;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;


class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function register(Request $request)
    {
        $input = $request->all();
        $this->validate($request, [
            'email' => 'required|email',
            'username' => 'required',
            'password' => 'required|min:6',
        ]);

        if (User::where('email', '=', $request->input('email'))->exists()) {
            return redirect()->route('register')->with('email_exists', 'Lietotājs ar šādu e-pastu jau eksistē!');
        }
        if (User::where('username', '=', $request->input('username'))->exists()) {
            return redirect()->route('register')->with('username_exists', 'Lietotājs ar šādu lietotājvārdu jau eksistē!');
        }

        $user = User::create([
            'username' => $request->input('username'),
            'email' => strtolower($request->input('email')),
            'password' => Hash::make($request->input('password')),
        ]);

        return redirect()->route('login')->with('register_success', 'Konts tika izveidots!');
    }

    public function showRegister()
    {
        return view('register');
    }
}



