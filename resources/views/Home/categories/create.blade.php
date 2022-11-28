@extends('Home.layouts.main')

@section('container')

<div class="d-flex justify-content-between flex-wrap flex-md nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
  <h1 class="h2">Create New Category</h1>
</div>

<form action="/dasbhoard/categories" method="POST" class="mb-3">
  @csrf
  
  <div class="mb-3">
    <label for="name" class="form-label">Name Category</label>
    <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" value="{{ old('name') }}" id="name" autofocus>

    @error('name')
    <div class="invalid-feedback">
      {{ $message }}
    </div>
    @enderror
  </div>
  <div class="mb-3">
    <label for="slug" class="form-label">slug</label>
    <input type="text" name="slug" class="form-control @error('slug') is-invalid @enderror" value="{{ old('slug') }}" id="slug" autofocus>

    @error('slug')
    <div class="invalid-feedback">
      {{ $message }}
    </div>
    @enderror
  </div>

  
  <div class="mt-5">
    <a href="/dasbhoard/categories" class="btn btn-sm btn-outline-primary">Back to categories</a>
    <button type="submit" class="btn btn-sm btn-outline-success">Simpan Data Category</button>

  </div>
</form>


    
@endsection