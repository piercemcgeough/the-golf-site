@extends('layout')

@section('content')
    <div class="card text-center">
        <div class="card-body">
            <h5 class="card-title">{{ $club->name }}</h5>
            <p class="card-text">
                {{ $club->address }}
                <br>
                Members: {{ $club->members->count() }}
            </p>

            <a href="{{ route('clubs.edit', $club->id) }}" class="btn btn-primary">Edit</a>

            <a
                href="{{ route('clubs.destroy', $club->id) }}"
                class="btn btn-danger"
                onclick="return confirm('Are you sure?');"
            >
                Delete
            </a>
        </div>
        <div class="card-footer text-muted">
            {{ $club->name }}
        </div>
    </div>
@endsection
