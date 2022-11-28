@extends('Home.layouts.main')

@section('container')

<div class="d-flex justify-content-between flex-wrap flex-md nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
  <h1 class="h2">Post Categories</h1>
</div>
<div class="table-responsive col-lg-12">
  <a href="/dasbhoard/categories/create" class="btn btn-outline-info mb-3">Create new category</a>


@if (session()->has('success'))
  <div class="alert alert-success alert-dismissible fade show" role="alert">
    {{ session('success') }}
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>
@endif


  <table class="table table-striped table-bordered mb-2  ">
    <thead class="text-center">
      <tr>
        <th scope="col">No</th>
        <th scope="col">Category Name</th>
        <th scope="col">Action</th>
      </tr>
    </thead>
    <tbody> 
      @foreach ($categories as $category)
       <tr>
        <td class="text-center">{{ $loop->iteration }}</td>
        <td>{{ $category->name }}</td>
        <td class="text-center">
          <a  href="/dasbhoard/categories/{{ $category->slug }}" class="btn btn-sm btn-info"><span data-feather="eye"></span></a>
          <a href="/dasbhoard/categories/{{ $category->slug }}/edit" class="btn btn-sm btn-warning"><span data-feather="edit"></span></a>

          
          <!-- Button trigger modal -->
          <button type="button" class="btn btn-sm btn-danger border-0" data-bs-toggle="modal" data-bs-target="#delete{{ $category->id }}"><span data-feather="x-circle"></span>
          </button>
       
          
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>
</div>




@foreach($categories as $category)
<!-- Modal -->
<div class="modal fade" id="delete{{ $category->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header bg-danger">
        <h5 class="modal-title text-white " id="exampleModalLabel">Are You Sure Delete Data</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form action="/dasbhoard/categories/{{ $category->id }}" method="POST" class="d-inline">
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
@endforeach

@endsection