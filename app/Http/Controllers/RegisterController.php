<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function index(){
        return view("dashboard");
    }
    public function register(Request $request){
     $validatedData = $request->validate([
        'name' => 'required|max:255',
        'username' => 'required|min:3|max:255|unique:users|regex:/^\S*$/',
        'email' => 'required|email:dns|unique:users',
        'password' => 'required|min:8|max:255|confirmed',
        'is_admin' => 'nullable|boolean'
     ],[
        'username.regex'=> 'username tidak boleh mengandung spasi'
     ]);
     $validatedData['password']= Hash::make($validatedData['password']);

     User::create($validatedData);


     return redirect("/register")->with('success','User Berhasil Ditambahkan');
    
    }
}
