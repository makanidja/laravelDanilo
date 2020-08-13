@extends('master')
@section('title', "Posts")
@section("main-content")
    <h1>Posts</h1>
    <h2>{{ $post1}}</h2>
    <h2>{{ $post2}}</h2>
    @foreach($names as $name)
        @if($name ==  "Lana")
            <li>Zorica</li>
        @else
            <li>{{$name}}</li>
        @endif
    @endforeach
@endsection