<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class loginController extends Controller
{
    public function index()
    {
        return view("login");
    }
    public function auth(Request $request)
    {
        $credential = $request->validate([
            'username' => 'required|min:3|max:255|regex:/^\S*$/',
            'password' => 'required|min:8|max:255'
        ], [
            'username.regex' => 'username tidak mengandung spasi'
        ]);

        if (Auth::attempt($credential)) {
            $request->session()->regenerate();

            return redirect()->intended('/');
        }

        return back()->with('loginError', 'login fail');
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/');
    }
}
