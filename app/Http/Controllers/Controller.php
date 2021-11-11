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

    public function search()
    {
        $posts = Post::where('title', 'LIKE', '%' . request()->search . '%')->get();
        return view('home', ['posts' => $posts]);
    }

    function login()
    {
        if (Auth::check()) {
            return redirect()->account();
        } else {
            return view('account.login', ['frosted' => true]);
        }
    }

    function logout()
    {
        return view('account.logout', ['frosted' => true]);
    }

    function register()
    {
        return view('account.register', ['frosted' => true]);
    }

    function account()
    {
//        if(Auth::check())
//        {
//            return view('account');
//        }
//        else
//        {
//            return redirect()->home();
//        }
//        TODO: activate code again
        return view('account.account', ['frosted' => true]);
    }

    function settings()
    {
        return view('account.settings', ['frosted' => true]);
    }

    function recipeBook()
    {
//        if (Auth::check()) {
//            $favorites = explode(',', Auth::user()->favorites);
//            $posts = [];
//            foreach ($favorites as $favorite) {
//                array_push($posts, Post::where('id', $favorite)->first());
//            }
//            return view('recipes.recipeBook', ['posts' => $posts]);
//        } else {
//            return redirect()->home();
//        }
        //        TODO: activate code again
        return view('recipes.recipeBook');
    }

    function savePost()
    {
        if (Auth::check()) {
            $favorites = explode(',', Auth::user()->favorites);
            if (!in_array(request()->postid, $favorites)) {
                if (!Auth::user()->favorites = ' ') {
                    $newFavorites = Auth::user()->favorites . ',' . request()->postid;
                } else {
                    $newFavorites = request()->postid;
                }
                Auth::user()->favorites = $newFavorites;
                Auth::user()->save();
            }
            return redirect()->back();
        }
    }

    function details()
    {
        $details = Post::where('id', request()->postid)->first();
        return view('recipes.show', ['details' => $details]);
    }

}
