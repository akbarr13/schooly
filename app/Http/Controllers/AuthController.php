<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function login(Request $request)
    {

        //Mengumpulkan semua request yang dikirim
        $input = $request->all();

        //Memvalidasi request
        $credentials = $request->validate([
            'username' => 'required',
            'password' => 'required'
        ]);

        //Mendeteksi request yang masuk email atau username
        $fieldType = filter_var($request->username, FILTER_VALIDATE_EMAIL) ? 'email' : 'username';

        //Auth
        if (auth()->attempt(array($fieldType => $input['username'], 'password' => $input['password']))) {
            $request->session()->regenerate();
            return redirect()->back();
        }

        //Mengembalikan ke halaman sebelumnya apabila autentikasi tidak valid
        return back()->with('loginError', 'Email or password is not valid !');
    }

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }

    public function loginPage()
    {
        return view('authentication.login', ['title' => 'Login']);
    }

    public function registerPage()
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

        $validatedData['password'] = Hash::make($validatedData['password']);

        User::create($validatedData);

        $request->session()->flash('success', 'Register successful!, you can login now.');

        return redirect('/login');
    }
}
