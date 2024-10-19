<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Arr;
use App\Models\Post;
use App\Models\User;
use App\Models\Category;

Route::get('/', function () {
    return view('home', ['title' => "Homepage"]);
});

Route::get('/about', function () {
    return view('about', ['title' => "About"]);
});

Route::get('/posts', function () {
    return view('posts', ['title' => "Blog", 'posts' => Post::all() ]);
});

Route::get('/posts/{post:slug}', function (Post $post) {
        // $post = Post::find($post);
        // dd($post);
        return view('post', ['title'=> 'Single Post', 'post' => $post]);
});

Route::get('/contact', function () {
    return view('contact', ['title' => "Contact"]);
});

Route::get('/authors/{user:username}', function (User $user) {
    return view('posts', ['title'=> count($user->posts) . ' Articles by ' . $user->name, 'posts' => $user->posts]);
});

Route::get('/categories/{category:slug}', function (Category $category) {
    return view('posts', ['title'=> 'Articles in: ' . $category->name, 'posts' => $category->posts]);
});
