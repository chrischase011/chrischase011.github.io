<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Users;
use Illuminate\Support\Facades\DB;
use Hash;
Use Auth;
class LogCon extends Controller
{
    //
    public function index()
    {
    	$title = "Login - Eyevent";
    	return view('login.login')->with('title',$title);
    }
 

    public function login(Request $request)
    {
        $request->validate([
            'username' => 'required|string',
            'password' => 'required|string|min:8',
        ]);

        $credentials = $request->only('username', 'password');

        if(Auth::attempt($credentials))
        {   
             return redirect()->intended('/');
        }

        return redirect('/login')->with('error','Invalid Credentials');

    }
    
    public function logout()
    {
        Auth::logout();

        return redirect('/');
    }
}
