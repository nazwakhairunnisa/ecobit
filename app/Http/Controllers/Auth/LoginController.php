<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;


class LoginController extends Controller
{

    public function login(Request $request)
{
    $credentials = $request->only('email', 'password');

    if (Auth::attempt($credentials)) {
        $request->session()->regenerate();

        // Custom redirect logic
        dd(Auth::user()->focusAreas()->count(), Auth::user()->focusAreas()->pluck('id'));
        if (Auth::user()->focusAreas()->count() == 0) {
            return redirect()->route('select.focus');
        }
        return redirect()->route('dashboard');
    }

    return back()->withErrors([
        'email' => 'Email atau password salah.',
    ]);
}
}
