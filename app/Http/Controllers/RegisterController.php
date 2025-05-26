<?php

namespace App\Http\Controllers;

use App\Models\User;
use Auth;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function create(){
        return view('auth.register');
    }

    public function store(Request $request) {

        $validate = $request->validate([
            'name' => ['required'],
            'email' => ['required', 'unique:users,email'],
            'password' => ['required'],
            'day' => ['required'],
            'month' => ['required'],
            'year' => ['required'],
            'email_notifications' => []
        ]);

        $date_of_birth = $request['year'].'-'.$request['month'].'-'.$request['day'];
        $email_notifications = ($request['email_notifications'] == 'on') ? 1 : 0;

        $user = User::create([
            'name' => $request['name'],
            'email' => $request['email'],
            'password' => $request['password'],
            'date_of_birth' => $date_of_birth,
            'email_notifications' => $email_notifications
        ]);

        Auth::login($user);

        return redirect()->route('index');

    }
}
