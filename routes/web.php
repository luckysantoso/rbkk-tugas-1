<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Arr;

Route::get('/', function () {
    return view('home', ['title' => "Homepage"]);
});

Route::get('/about', function () {
    return view('about', ['title' => "About"]);
});

Route::get('/posts', function () {
    return view('posts', ['title' => "Blog", 'posts' => [
        [
            'id' => 1,
            'slug' => 'judul-artikel-1',
            'title' => 'Semoga ada kemudahan',
            'author' => 'Lucky Santoso',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Deleniti ab sequi est ex vel quaerat molestias labore modi debitis maxime ut pariatur optio, ipsum distinctio inventore aspernatur repudiandae voluptatem minus! Lorem ipsum dolor, sit amet consectetur adipisicing elit. Est rerum ipsam magnam ratione sapiente maxime, reiciendis, sit ex illo reprehenderit dolor repudiandae rem officiis unde hic veritatis repellat architecto nobis?'
        ],
        [
            'id' => 2,
            'slug' => 'judul-artikel-2',
            'title' => 'Alhamdulillah',
            'author' => 'Lucky Santoso',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Deleniti ab sequi est ex vel quaerat molestias labore modi debitis maxime ut pariatur optio, ipsum distinctio inventore aspernatur repudiandae voluptatem minus! Lorem ipsum dolor, sit amet consectetur adipisicing elit. Est rerum ipsam magnam ratione sapiente maxime, reiciendis, sit ex illo reprehenderit dolor repudiandae rem officiis unde hic veritatis repellat architecto nobis?'
        ]
    ]]);
});

Route::get('/posts/{slug}', function ($slug) {
    $posts = [

            [
                'id' => 1,
                'slug' => 'judul-artikel-1',
                'title' => 'Semoga ada kemudahan',
                'author' => 'Lucky Santoso',
                'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Deleniti ab sequi est ex vel quaerat molestias labore modi debitis maxime ut pariatur optio, ipsum distinctio inventore aspernatur repudiandae voluptatem minus! Lorem ipsum dolor, sit amet consectetur adipisicing elit. Est rerum ipsam magnam ratione sapiente maxime, reiciendis, sit ex illo reprehenderit dolor repudiandae rem officiis unde hic veritatis repellat architecto nobis?'
            ],
            [
                'id' => 2,
                'title' => 'Alhamdulillah',
                'slug' => 'judul-artikel-2',
                'author' => 'Lucky Santoso',
                'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Deleniti ab sequi est ex vel quaerat molestias labore modi debitis maxime ut pariatur optio, ipsum distinctio inventore aspernatur repudiandae voluptatem minus! Lorem ipsum dolor, sit amet consectetur adipisicing elit. Est rerum ipsam magnam ratione sapiente maxime, reiciendis, sit ex illo reprehenderit dolor repudiandae rem officiis unde hic veritatis repellat architecto nobis?'
            ]
            ];
        $post = Arr::first($posts, function($post) use ($slug){
            return $post['slug'] == $slug;
        });
        // dd($post);
        return view('post', ['title'=> 'Single Post', 'post' => $post]);
});


Route::get('/contact', function () {
    return view('contact', ['title' => "Contact"]);
});
