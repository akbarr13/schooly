<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function index()
    {
        return view('authentication.register', ['title' => 'Register']);
    }

    public function register(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|max:30|min:5',
            'username' => ['required', 'min:5', 'max:255', 'unique:users'],
            'email' => 'required|email|unique:users|min:10|max:255',
            'password' => 'required|min:8|max:255'
        ]);

        $checkEmail = User::where('email', $validatedData['email']);

        $checkUsername = User::where('username', $validatedData['username']);

        if ($checkEmail) {
            return back()->with(['loginError', 'Email already exists']);
        }
        if ($checkUsername) {
            return back()->with(['loginError', 'Username already exists']);
        }

        $validatedData['password'] = Hash::make($validatedData['password']);

        User::create($validatedData);

        $request->session()->flash('success', 'Register successful!, you can login now.');

        return redirect('/login');
    }
}
