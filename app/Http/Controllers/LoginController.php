<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;



class LoginController extends Controller
{

    public function index()
    {
        return view('authentication.login', ['title' => 'Login']);
    }

    public function authenticate(Request $request)
    {
        $input = $request->all();

        $credentials = $request->validate([
            'username' => 'required',
            'password' => 'required'
        ]);

        // Cek password dan email valid atau tidak
        $fieldType = filter_var($request->username, FILTER_VALIDATE_EMAIL) ? 'email' : 'username';
        if (auth()->attempt(array($fieldType => $input['username'], 'password' => $input['password']))) {
            $request->session()->regenerate();
            return redirect()->route('home');
        }

        return back()->with('loginError', 'Email or password is not valid !');
    }

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }

    
    
}
