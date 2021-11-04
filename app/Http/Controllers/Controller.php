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
            return redirect()->account();
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
        if(Auth::check())
        {
            return view('account');
        }
        else
        {
            return redirect()->home();
        }  
    }

    function recipebook()
    {
        if(Auth::check())
        {
            $favorites = explode(',', Auth::user()->favorites);
            $posts = [];
            foreach($favorites as $favorite)
            {
                array_push($posts, Post::where('id', $favorite)->first());
            }           
            return view('recipes.recipeBook', ['posts' => $posts]);
        }
        else
        {
            return redirect()->home();
        }
        
    }

    function savePost()
    {
        if(Auth::check())
        {
            $favorites = explode(',', Auth::user()->favorites);
            if(!in_array(request()->postid, $favorites))
            {
                if(!$favorites[0] = NULL)
                {
                    $newFavorites = Auth::user()->favorites . ',' . request()->postid;
                }
                else
                {
                    $newFavorites = request()->postid;
                }
                Auth::user()->favorites = $newFavorites;
                Auth::user()->save();
            }
            return redirect()->back();
        }
    }
}
