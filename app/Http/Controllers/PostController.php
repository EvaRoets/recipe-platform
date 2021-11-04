<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Support\Facades\Auth;

class PostController extends Controller
{
    function creator()
    {
        if(Auth::check())
        {
            return view("recipes.components.create");
        }
        else
        {
            return redirect()->home();
        }
    }

    function createpost()
    {
        $this->validate(request(), [
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'title' => 'required',
            'tags' => 'required',
            'ingredients' => 'required',
            'description' => 'required'
        ]);

        $imageName = time().'.'.request()->image;
        request()->image->move(public_path('image'),$imageName);
        
        Post::create($imageName, request(['title', 'tags', 'ingredients', 'description']));

        return redirect()->home();

    }
}
