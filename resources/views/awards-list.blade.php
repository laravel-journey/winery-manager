@extends('layouts.master')

@section('contents')
    <h1 class="mt-5">Awards</h1>
    <hr>

    <table class="table table-striped">
        <thead>
            <tr>
                <th scope="col"># ID</th>
                <th scope="col">Name</th>
                <th scope="col">Website</th>
                <th scope="col">Operations</th>
            </tr>
        </thead>

        <tbody>
            @forelse($awards as $award)
                <tr>
                    <th scope="row">{{ $award->id }}</th>
                    <td>{{ $award->name }}</td>
                    <td>{{ $award->website }}</td>
                    <td>-</td>
                </tr>
            @empty
                <td colspan="5">Sorry, no awards found.</td>
            @endforelse
        </tbody>
    </table>
@endsection
