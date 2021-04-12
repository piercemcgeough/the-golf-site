@extends('layout')

@section('content')
    <div class="card text-center">
        <div class="card-body">

            <form action="{{ route('clubs.update', $club->id) }}" method="POST">
                @csrf
                @method('PATCH')

                <div class="mb-3">
                    <label for="name" class="form-label">Name</label>
                    <input type="text" class="form-control" id="name" name="name" value="{{ $club->name }}">
                </div>

                <div class="mb-3">
                    <label for="address" class="form-label">Address</label>
                    <input type="text" class="form-control" id="address" name="address" value="{{ $club->address }}">
                </div>


                <a href="{{ route('clubs.show', $club->id) }}" class="btn btn-secondary">Cancel</a>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>

        <div class="card-footer text-muted">
            {{ $club->name }}
        </div>
    </div>
@endsection
