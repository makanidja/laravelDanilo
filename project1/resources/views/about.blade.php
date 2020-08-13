@extends('master')
@section('title',"About")

@section('main-content')
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="#">Navbar</a>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link" href="oglasi">Oglasi <span class="sr-only">(current)</span></a>
          </li>
        </ul>
    </div>
</nav>
    @foreach ($cars as $key=>$value)
        <ul>
            <li>{{$key}} <a href="">{{$value}}</a></li>
        </ul>
    @endforeach
@endsection



