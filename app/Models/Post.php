<?php

namespace App\Models;
use Illuminate\Support\Arr;

class Post {
    public static function all(){
        return [
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
            ];
    }

    public static function find($slug){
        // return Arr::first(static::all(), function($post) use ($slug){
        //     return $post['slug'] == $slug;
        // });

        $post = Arr::first(static::all(), fn($post) => $post['slug'] == $slug);

        if (!$post){
            abort(404);
        }

        return $post;
    }
}