@extends('layouts.master')

@section('contents')
    <h1 class="mt-5">Wines</h1>
    <hr>

    <table class="table table-striped">
        <thead>
            <tr>
                <th scope="col"># ID</th>
                <th scope="col">Name</th>
                <th scope="col">Producer</th>
                <th scope="col">Quantity</th>
                <th scope="col">Price</th>
                <th scope="col">Operations</th>
            </tr>
        </thead>

        <tbody>
            @forelse($wines as $wine)
                <tr>
                    <th scope="row">{{ $wine->id }}</th>
                    <td>{{ $wine->name }}</td>
                    <td>{{ $wine->producer->name }}</td>
                    <td>{{ $wine->quantity }}</td>
                    <td>${{ $wine->price }}</td>
                    <td>-</td>
                </tr>
            @empty
                <td colspan="5">Sorry, no wines found.</td>
            @endforelse
        </tbody>
    </table>
@endsection
