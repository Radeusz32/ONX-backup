<?php

use Illuminate\Support\Facades\Route;
use App\Models\Post;

Route::get('/', fn () => view('welcome'));

Route::get('/', function () {
    $posts = Post::with('categories')->get();
    return view('welcome', compact('posts'));
});