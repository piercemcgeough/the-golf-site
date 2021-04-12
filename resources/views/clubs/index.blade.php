@extends('layout')

@section('content')
    <div class="d-flex justify-content-end">
        <a href="{{ route('clubs.create') }}" class="btn btn-primary">Add Club</a>
    </div>

    <div class="table-responsive">
        <table class="table table-striped table-sm">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Name</th>
                    <th>Address</th>
                    <th class="text-end">Registration</th>
                    <th class="text-end">Members</th>
                </tr>
            </thead>
            <tbody>
                @forelse($clubs as $club)
                    <tr>
                        <td>{{ $club->id }}</td>
                        <td>
                            <a href="{{ route('clubs.show', $club->id) }}">
                                {{ $club->name }}
                            </a>
                        </td>
                        <td>{{ $club->address }}</td>
                        <td class="text-end">{{ $club->created_at->format('d-m-Y') }}</td>
                        <td class="text-end">{{ $club->members->count() }}</td>
                    </tr>
                @empty
                @endforelse
            </tbody>
        </table>
    </div>
@endsection
