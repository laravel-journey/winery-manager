@extends('layouts.master')

@section('contents')
    <h1 class="mt-5">Awards</h1>
    <p class="lead">Add a new award here.</p>
    <hr>

    <form action="{{ url('add-award') }}" method="POST">
        {{ csrf_field() }}

        <div class="form-group">
            <input type="text" class="form-control" id="producerName" placeholder="Name" name="name">
        </div>

        <div class="form-group">
            <input type="text" class="form-control" id="producerWebsite" placeholder="Website" name="website">
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection
