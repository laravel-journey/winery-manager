@extends('layouts.master')

@section('contents')
    <h1 class="mt-5">Producers</h1>
    <hr>

    <table class="table table-striped">
        <thead>
            <tr>
                <th scope="col"># ID</th>
                <th scope="col">Name</th>
                <th scope="col">Website</th>
                <th scope="col">Email</th>
                <th scope="col">Operations</th>
            </tr>
        </thead>

        <tbody>
            @forelse($producers as $producer)
                <tr>
                    <th scope="row">{{ $producer->id }}</th>
                    <td>{{ $producer->name }}</td>
                    <td>{{ $producer->website }}</td>
                    <td>{{ $producer->email }}</td>
                    <td>-</td>
                </tr>
            @empty
                <td colspan="5">Sorry, no producers found.</td>
            @endforelse
        </tbody>
    </table>
@endsection
