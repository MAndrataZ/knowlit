<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class SignupController extends Controller
{
    public function index()
    {
        return view('signup', ["title" => "Sign up"]);
    }
    public function store(Request $request) 
    {
        $validatedData = $request->validate([
            'username' => 'required|unique:users|min:5|max:255',
            'email' => 'required|email:dns|unique:users',
            'password' => 'required|min:5|max:255'
        ]);

        $validatedData['password'] = bcrypt($validatedData['password']);

        User::create($validatedData);
        
        return redirect('/signin')->with('success', 'Registration succesfull! Please sign in.');
    }
}
