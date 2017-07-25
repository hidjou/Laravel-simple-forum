@extends('layouts.app')

@section('content')
    <div class="jumbotron text-center">
        <h1>Welcome to Escape</h1>
        <p>This is the home page</p>
        <p><a href="/login" class="btn btn-primary btn-lg" role="button">Login</a>
        <a href="/register" class="btn btn-success btn-lg" role="button">Register</a>
        <a href="/posts" class="btn btn-warning btn-lg" role="button">Browse forum</a>
        </p>
    </div>
@endsection