@extends('layout')

@section('content')
<div class="container">
    <a href="/posts/create" class="btn btn-primary mb-4">New Content</a>
    <a href="/logout" class="btn btn-primary mb-4">Logout</a>
    <h5 class="float-end">{{Auth::user()->name}}</h5>
  <div class="card">
    <div class="card-header text-center">
      Contents
    </div>
    <div class="card-body">
      @foreach ($data as $post)
      <div>
        <h5 class="card-title">{{$post->name}}</h5>
        <p class="card-text">{{$post->description}}</p>
        <div class="d-flex">
          <a href="/posts/{{$post->id}}" class="btn btn-primary">View</a>
          <a href="/posts/{{$post->id}}/edit" class="btn btn-warning mx-3">Edit</a>
          <form action="/posts/{{$post->id}}" method="post">
            @csrf
            @method('DELETE')
           <button type="submit" class="btn btn-danger mx-2">Delete</button>
          </form>
        </div>
      </div>
      <hr>
      @endforeach
    </div>
  </div>
</div>
@endsection