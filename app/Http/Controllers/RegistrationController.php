<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Facades\Auth;

class RegistrationController extends Controller
{
    function registration()
    {
        $this->validate(request(), [
            'name' => 'required',
            'first_name' => 'required',
            'email' => 'required|email',
            'password' => 'required|confirmed'
        ]);

        $user = User::create(request(['name', 'first_name', 'email', 'password']));

        Auth::login($user);
        return redirect("/");
    }
}



