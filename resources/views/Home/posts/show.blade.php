@extends('Home.layouts.main')

@section('container')
<div class="container">
  <div class="row my-3">
    <div class="col-lg-12">
      <article>
        <h2 class="mb-3">{{ $post->title }}</h2>
      
        <a href="/dasbhoard/posts" class="btn btn-sm btn-success"><span data-feather="arrow-left"></span> Back to my post</a>
        <a href="/dasbhoard/posts/{{ $post->slug }}/edit" class="btn btn-sm btn-warning "><span data-feather="edit"></span>Edit</a>
        
        <!-- Button trigger modal -->
        <button type="button" class="btn btn-sm btn-danger " data-bs-toggle="modal" data-bs-target="#delete{{ $post->id }}"><span data-feather="x-circle"></span>
          Delete
        </button>


        @if ($post->image)

        <div style="">
          <img src="{{ asset('storage/' . $post->image) }}" alt="{{ $post->category->name }}" class="img-fluid mt-3">
         </div>

        
        @else
        <img src="https://source.unsplash.com/1500x500?{{ $post->category->name }}" alt="{{ $post->category->name }}" class="img-fluid mt-3"> 
        @endif
        
       
        <article class="my-3 fs-6 font-weight-bold" style="text-align: justify">
          {!! $post->body !!}
        </article>
       
      </article>
     
    </div>
  </div>
</div>


<!-- Modal -->
<div class="modal fade" id="delete{{ $post->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header bg-danger">
        <h5 class="modal-title text-white " id="exampleModalLabel">Are You Sure Delete Data</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form action="/dasbhoard/posts/{{ $post->slug }}" method="POST" class="d-inline">
        @method('delete')
        @csrf
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="sumbit" class="btn btn-danger">Delete</button>
      </div>
      </form>
    </div>
  </div>
</div>



@endsection