
@extends('layouts.main')

@section('container')
<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-8 mb-5 ">
      <article>
        <h2 class="mb-3">{{ $post->title }}</h2>
      
        <p>By. <a href="/posts?author={{ $post->author->username }}" class="text-decoration-none">{{ $post->author->name }}</a> in <a href="/posts?category={{ $post->category->slug }}" class="text-decoration-none"> {{ $post->category->name }}</a></p>

        @if ($post->image)

        <div style="">
          <img src="{{ asset('storage/' . $post->image) }}" alt="{{ $post->category->name }}" class="img-fluid mt-3">
         </div>
         @else
        <img src="https://source.unsplash.com/1500x500?{{ $post->category->name }}" alt="{{ $post->category->name }}" class="img-fluid">
        @endif
         <article class="my-3 fs-6 " style="text-align: justify">
          {!! $post->body !!}
        </article>
       
      </article>
      <a href="/posts" class="d-block mt-3 text-decoration-none">Back To Post</a>
    </div>
  </div>
</div>
    
@endsection