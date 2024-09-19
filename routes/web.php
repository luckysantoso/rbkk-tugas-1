<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Arr;
use App\Models\Post;


Route::get('/', function () {
    return view('home', ['title' => "Homepage"]);
});

Route::get('/about', function () {
    return view('about', ['title' => "About"]);
});

Route::get('/posts', function () {
    return view('posts', ['title' => "Blog", 'posts' => Post::all() ]);
});

Route::get('/posts/{slug}', function ($slug) {
        $post = Post::find($slug);
        // dd($post);
        return view('post', ['title'=> 'Single Post', 'post' => $post]);
});


Route::get('/contact', function () {
    return view('contact', ['title' => "Contact"]);
});
