@extends('layout')

@section('content')
<div class="container">
    <div class="card">
        <div class="card-header text-center">
            Edit Post
        </div>
        <div class="card-body">
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <form action="/posts/{{$post->id}}" method="post">
                @csrf
                @method('PUT')
                <div class="form-group mb-3">
                    <label for="exampleInputEmail1" class="form-label">Name</label>
                    <input type="text" class="form-control" name="name" value="{{old('name',$post->name)}}">
                </div>
                <div class="form-group mb-3">
                    <label for="exampleInputEmail1" class="form-label">Description</label>
                    <textarea name="description" cols="30" rows="10" class="form-control">{{old('description',$post->description)}}</textarea>
                </div>
                <div class="form-group mb-3">
                    <select name="category_id" class="form-control">
                        <option value="" disabled selected>Select Category</option>
                        @foreach ($categories as $item)
                            <option value="{{$item->id}}" 
                                {{ $item->id==$post->category_id?'selected':'' }}>
                                {{$item->name}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                <button type="submit" class="btn btn-primary">Submit</button>
                <a href="/posts" class="btn btn-primary">Back</a>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection