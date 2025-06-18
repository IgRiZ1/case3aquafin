<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function login(Request $request)
    {
        $credentials = $request->validate([
            'login' => ['required'],
            'password' => ['required'],
        ]);

        $login_type = filter_var($credentials['login'], FILTER_VALIDATE_EMAIL) ? 'email' : 'username';

        if (\Auth::attempt([$login_type => $credentials['login'], 'password' => $credentials['password']])) {
            $request->session()->regenerate();
            return redirect('/startpagina');
        }

        return back()->withErrors([
            'login' => 'Ongeldige inloggegevens.',
        ])->withInput();
    }
} 