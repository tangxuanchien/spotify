<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SessionController extends Controller
{
    public function show()
    {
        return view('auth.login');
    }

    public function store(Request $request)
    {
        // validate
        $validate = $request->validate([
            'email' => ['required', 'exists:users,email'],
            'password' => ['required', 'min:6'],
            'remember' => []
        ]);

        // Auth::attempt == User:where($validate)
        if (Auth::attempt($validate)) {
            $request->session()->regenerate();

            return redirect()->route('index');
        } else {
            return back()->withErrors(['login' => 'Thông tin tài khoản không khớp'])->withInput();
        }

    }

    public function showForgetPassword()
    {
        return view('auth.forget-password');
    }

    public function forgetPassword(Request $request)
    {
        $user = User::where('email', $request['email'])->first();
        if (!$user) {
            return back()->withErrors(['forget' => 'Email không tồn tại'])->withInput();
        }
        // return back();
    }

    public function destroy()
    {
        Auth::logout();

        return redirect()->route('index');
    }

    public function search(Request $request)
    {
        dd($request);
    }

    // Session Admin
    public function showAdmin()
    {
        return view('admin.login');
    }

    public function storeAdmin(Request $request)
    {
        $validate = $request->validate([
            'email' => 'required|email',
            'password' => 'required|max:8'
        ]);

        if (
            Auth::guard('admin')
                ->attempt([
                    'email' => $request['email'],
                    'password' => $request['password']
                ])
        ) {
            $request->session()->regenerate();

            return redirect()->route('admin.index');
        } else {
            return back()->withErrors(['login' => 'Thông tin không chính xác'])->withInput();
        }
    }

    public function destroyAdmin()
    {
        Auth::guard('admin')->logout();
        return redirect()->route('admin.session.show');
    }
}
