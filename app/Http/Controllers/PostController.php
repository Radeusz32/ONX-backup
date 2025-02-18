<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::with('categories')->get();
        // return view('posts.welcome', compact('posts'));
    }

    public function store(Request $request)
    {
        $post = Post::create($request->only(['title', 'content']));
        $post->categories()->attach($request->category_ids);
        return $post;
    }

    public function show(Post $post)
    {
        return $post->load('categories');
    }

    public function update(Request $request, Post $post)
    {
        $post->update($request->only(['title', 'content']));
        $post->categories()->sync($request->category_ids);
        return $post;
    }

    public function destroy(Post $post)
    {
        $post->delete();
        return response()->json(['message' => 'Deleted successfully']);
    }
}
