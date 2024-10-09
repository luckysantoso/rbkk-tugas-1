<x-layout>
  <x-slot:title> {{$title}}</x-slot:title>
  <h3 class="text-xl">Welcome to my Blog page</h3>

  @foreach($posts as $post)
  <article class="py-8 max-w-screen-md border-b border-gray-300">
    <a href="/posts/{{$post['slug']}}" class="hover:underline">
      <h2 class="text-3xl tracking-tight mt-5 mb-2 font-bold text-gray-900">
        {{$post['title']}}
      </h2>
    </a>
    <div class="text-base">
      <a href="#" class="">{{$post['author']}}</a>  19 September 2024
      
      <p class="my-4 font-light">{{Str::limit($post['body'], 100)}}</p>
      <a href="/posts/{{$post['slug']}}" class="text-blue-700 hover:underline">Read more &raquo</a>
    </div>
  </article>
  @endforeach

</x-layout>