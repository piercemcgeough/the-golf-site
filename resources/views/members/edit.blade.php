@extends('layout')

@section('content')
    <div class="card text-center">
        <div class="card-body">

            <form action="{{ route('members.update', $member->id) }}" method="POST">
                @csrf
                @method('PATCH')

                <div class="mb-3">
                    <label for="name" class="form-label">Name</label>
                    <input type="text" class="form-control" id="name" name="name" value="{{ $member->name }}">
                </div>

                <div class="mb-3">
                    <label for="gender" class="form-label">Gender</label>
                    <select name="gender" class="form-select">
                        <option value="male" {{ $member->gender == 'male' ? 'selected' : ''}}>Male</option>
                        <option value="female" {{ $member->gender == 'female' ? 'selected' : ''}}>Female</option>
                    </select>
                </div>

                <div class="mb-3">
                    <label for="dob" class="form-label">Date of Birth ( {{ $member->dob->format('Y-m-d') }} )</label>
                    <input type="date" class="form-control" id="dob" name="dob"
                        value="{{ $member->dob->format('Y-m-d') }}">
                </div>

                <a href="{{ route('members.show', $member->id) }}" class="btn btn-secondary">Cancel</a>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>

        <div class="card-footer text-muted">
            Member of
            <span class="fw-bold">{{ $member->club->name }}</span>
            since
            <span class="fw-bold">{{ $member->club->created_at->format('d-m-Y') }}</span>
        </div>
    </div>
@endsection
