<x-layout>
  <x-slot:title> {{$title}}</x-slot:title>
  <h3 class="text-xl">Welcome to my Blog page</h3>

  <article class="py-8 max-w-screen-md ">
      <h2 class="text-3xl tracking-tight mt-5 mb-2 font-bold text-gray-900">{{$post['title']}}</h2>
    <div class="text-base">
      <a href="/authors/{{$post->author->id}}" class="">{{$post->author->name}}</a>  | {{$post->created_at->diffForHumans()}}
      
      <p class="my-4 font-light">{{$post['body']}}</p>
      <a href="/posts" class="text-blue-700 hover:underline"> &laquo; Back to post</a>
    </div>
  </article>
</x-layout>