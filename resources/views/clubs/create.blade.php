@extends('layout')

@section('content')
    <div class="card text-center">
        <div class="card-body">

            <form action="{{ route('clubs.store') }}" method="POST">
                @csrf

                <div class="mb-3">
                    <label for="name" class="form-label">Name</label>
                    <input type="text" class="form-control" id="name" name="name" value="">
                </div>

                <div class="mb-3">
                    <label for="address" class="form-label">Address</label>
                    <input type="text" class="form-control" id="address" name="address" value="">
                </div>


                <a href="{{ route('clubs.index') }}" class="btn btn-secondary">Cancel</a>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>

        <div class="card-footer text-muted">
            Add club
        </div>
        </div>
@endsection
