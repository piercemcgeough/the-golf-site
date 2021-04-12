@extends('layout')

@section('content')
    <div class="bg-light p-5 rounded">
        <h1>Welcome to The Golf Site</h1>
        <p class="lead">We have a large number of clubs with a larger number of members</p>
        <a class="btn btn-lg btn-primary" href="/clubs" role="button">View {{ $clubs }} clubs</a>
        <a class="btn btn-lg btn-primary" href="/members" role="button">View {{ $members }} members</a>
    </div>
@endsection
