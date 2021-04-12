@extends('layout')

@section('content')
    <div class="card text-center">
        <div class="card-body">
            <h5 class="card-title">{{ $member->name }}</h5>
            <p class="card-text">
                Gender: {{ ucfirst($member->gender) }}
                <br>
                Date of Birth: {{ $member->dob->format('d-m-Y') }}
            </p>
            <a href="{{ route('members.edit', $member->id) }}" class="btn btn-primary">Edit</a>

            <a
                href="{{ route('members.destroy', $member->id) }}"
                class="btn btn-danger"
                onclick="return confirm('Are you sure?');"
            >
                Delete
            </a>
        </div>
        <div class="card-footer text-muted">
            Member of
            <span class="fw-bold">{{ $member->club->name }}</span>
            since
            <span class="fw-bold">{{ $member->club->created_at->format('d-m-Y') }}</span>
        </div>
    </div>
@endsection
