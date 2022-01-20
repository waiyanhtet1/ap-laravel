@extends('layout')

@section('content')
</style>
<div class="container">
    <div class="card">
        <div class="card-header text-center">
            New Post
        </div>
        <div class="card-body">
            {{-- error message --}}
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form action="/posts" method="post">
                @csrf
                <div class="form-group mb-3">
                    <label for="exampleInputEmail1" class="form-label">Name</label>
                    <input type="text" class="form-control" name="name" value="{{old('name')}}">
                </div>
                {{-- @error('name')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror --}}
                <div class="form-group mb-3">
                    <label for="exampleInputEmail1" class="form-label">Description</label>
                    <textarea name="description" cols="30" rows="10" class="form-control">{{old('description')}}</textarea>
                </div>
                {{-- @error('description')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror --}}
                <div class="form-group">
                <button type="submit" class="btn btn-primary">Submit</button>
                <a href="/posts" class="btn btn-primary">Back</a>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection