<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class PostController extends Controller
{
    function creator()
    {
        if (Auth::check()) {
            return view("recipes.components.create");
        } else {
            return redirect()->home();
        }
    }

    function createPost(Request $request)
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
        $user_login_id = auth()->id();


        Post::create([
            'user_id' => $user_login_id,
            'title' => $request->input('title'),
            'ingredients' => $request->input('ingredients'),
            'description' => $request->input('description'),
            'tags' => $request->input('tags'),
            'image' => 'images/' . $imageName,
            'votes' => 0
        ]);

        return redirect()->home();
    }
}
