@extends('layouts.app')
@section('content')
  <div class="jumbotron text-center">
    <h1>{{$title}}!</h1>
    <p>This is a Laravel application from scratch</p>
    <p><a href="/" class="btn btn-primary btn-lg" role="button">Login</a> <a href="/" class="btn btn-success btn-lg" role="button">Register</a></p>
  </div>
@endsection

