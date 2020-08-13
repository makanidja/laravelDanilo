@extends('master')
@section('title', "Oglasi")

@section('main-content')
    <h1>Mali oglasi</h1>
    @foreach ($oglasi as $key=>$value)
<li><a href="/oglas/{{$key}}">{{$value}}</a></li>
    @endforeach
@endsection


