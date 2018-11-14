@extends('layouts.master')

@section('contents')
    <h1 class="mt-5">Wines</h1>
    <p class="lead">Add a new wine here.</p>
    <hr>

    <form action="{{ url('add-wine') }}" method="POST">
        {{ csrf_field() }}

        <div class="form-group">
            <input type="text" class="form-control" id="wineName" placeholder="Name" name="name">
        </div>

        <div class="form-group">
            <input type="text" class="form-control" id="wineYear" placeholder="Year" name="year">
        </div>

        <div class="form-group">
            <input type="text" class="form-control" id="wineQuantity" placeholder="Quantity" name="quantity">
        </div>

        <div class="form-group">
            <input type="text" class="form-control" id="winePrice" placeholder="Price" name="price">
        </div>

        <div class="form-group">
            <label for="wineProducer">Producer:</label>
            <select name="producer_id" id="wineProducer" class="form-control">
                @foreach($producers as $producer)
                    <option value="{{ $producer->id }}">{{ $producer->name }}</option>
                @endforeach
            </select>
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection
