<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Support\Facades\Auth;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function index()
    {
        $posts = Post::all()->take(10);
        return view('home', ['posts' => $posts]);
    }

    function login()
    {
        if(Auth::check())
        {
            redirect()->account();
        }
        else
        {
            return view('login');
        }  
    }

    function register()
    {
        return view('register');
    }

    function account()
    {
        return view('account');
    }
}
