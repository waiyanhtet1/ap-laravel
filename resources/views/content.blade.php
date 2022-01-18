@extends('layout')

@section('content')
<h3>This is content page</h3>    
@foreach ($data as $key => $value)
{{$key.'='.$value}}
@endforeach
@endsection