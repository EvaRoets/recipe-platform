<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class SessionController extends Controller
{
    function checkLogin(Request $request)
    {
        $attributes = $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        if(Auth::attempt($attributes))
        {
            $user = User::where('email', $attributes['email'])->get();
            Auth::loginUsingId($user[0]->id);
            return redirect()->route('home');
        }
        else
        {
//TODO correct login error message
            return back()->with('error', 'Wrong Login Details');
        }
    }

    function logout()
    {
        Auth::logout();
        return redirect()->route('login');
    }
}
