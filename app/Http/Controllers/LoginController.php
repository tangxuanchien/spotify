<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
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
        dd(Auth::attempt($validate));

    }
}
