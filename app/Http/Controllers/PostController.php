<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Request;

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

    function createpost(Request $request)
    {
        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg|max:5048',
            'title' => 'required',
            'tags' => 'required',
            'ingredients' => 'required',
            'description' => 'required'
        ]);

        $imageName = time() . '-' . $request->name . '.' . $request->image->extension();  
        $request->image->move(public_path('images'), $imageName);

        Post::create([
            'image' => 'images/'.$imageName,
            'title' => $request->input('title'),
            'tags' => $request->input('tags'),
            'ingredients' => $request->input('ingredients'),
            'description' => $request->input('description')
        ]);

        return redirect()->home();
    }
}
