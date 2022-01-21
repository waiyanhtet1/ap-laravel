@extends('layout')

@section('content')
<div class="container">
    <div class="card">
        <div class="card-header text-center">
            Contents
        </div>
        <div class="card-body">
            <div>
                <h5 class="card-title">{{$post->name}}</h5>
                <p class="card-text">{{$post->description}}</p>
                <p class="card-text">{{'Category: '. $post->categories->name}}</p>
                <a href="/posts" class="btn btn-primary">Back</a>
            </div>
        </div>
    </div>
</div>
@endsection