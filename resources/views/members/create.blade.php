@extends('layout')

@section('content')
    <div class="card text-center">
        <div class="card-body">

            <form action="{{ route('members.store') }}" method="POST">
                @csrf

                <div class="mb-3">
                    <label for="name" class="form-label">Name</label>
                    <input type="text" class="form-control" id="name" name="name" value="">
                </div>

                <div class="mb-3">
                    <label for="gender" class="form-label">Gender</label>
                    <select name="gender" class="form-select">
                        <option value="male">Male</option>
                        <option value="female">Female</option>
                    </select>
                </div>

                <div class="mb-3">
                    <label for="dob" class="form-label">Date of Birth</label>
                    <input type="date" class="form-control" id="dob" name="dob" value="">
                </div>

                <div class="mb-3">
                    <label for="club_id" class="form-label">Club</label>
                    <select name="club_id" class="form-select">
                        <option value="">Select a club...</option>
                        @foreach ($clubs as $club)
                            <option value="{{ $club->id }}">{{ $club->name }}</option>
                        @endforeach
                    </select>
                </div>

                <a href="{{ route('members.index') }}" class="btn btn-secondary">Cancel</a>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>

        <div class="card-footer text-muted">
            Adding a new member
        </div>
    </div>
@endsection
