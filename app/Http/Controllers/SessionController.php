<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SessionController extends Controller
{
    public function show(){
        return view('auth.login');
    }

    public function store(Request $request){
        // validate
        $validate = $request->validate([
            'email' => ['required'],
            'password' => ['required', 'max:6']
        ]);

        // Auth::attempt == User:where($validate)
        if (Auth::attempt($validate)){
            // regenerate session
            $request->session()->regenerate();

            return redirect()->route('index');
        }

    }

    public function destroy(){
        Auth::logout();

        return redirect()->route('index');
    }
}
