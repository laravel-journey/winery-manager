<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::post('add-award', function(\Illuminate\Http\Request $request) {
    $award = new \App\Award();

    $award->name = $request->get('name');
    $award->website = $request->get('website');

    try {
        $award->save();
        return redirect('/awards')->with('success_message', 'Award added successfully.');
    } catch (\Throwable $e) {
        return redirect('add-awards')->with('error_message', 'Something went wrong. Try again!');
    }
});

Route::get('add-award', function() {
    return view('awards-add');
});

Route::post('add-producer', function(\Illuminate\Http\Request $request) {
    $producer = new \App\Producer();

    $producer->name = $request->get('name');
    $producer->website = $request->get('website');
    $producer->email = $request->get('email');

    try {
        $producer->save();
        return redirect('/producers')->with('success_message', 'Producer added successfully.');
    } catch (\Throwable $e) {
        return redirect('add-producer')->with('error_message', 'Something went wrong. Try again!');
    }
});

Route::get('add-producer', function() {
    return view('producers-add');
});

Route::post('add-wine', function(\Illuminate\Http\Request $request) {
    $wine = new \App\Wine();

    $wine->name = $request->get('name');
    $wine->year = $request->get('year');
    $wine->quantity = $request->get('quantity');
    $wine->price = $request->get('price');

    $producer = \App\Producer::find($request->get('producer_id'));
    $wine->producer()->associate($producer);

    try {
        $wine->save();
        $wine->awards()->sync($request->get('awards'));

        return redirect('/')->with('success_message', 'Wine added successfully.');
    } catch (\Throwable $e) {
        return redirect('add-wine')->with('error_message', 'Something went wrong. Try again!');
    }
});

Route::get('add-wine', function() {
    return view('wine-add', [
        'producers' => \App\Producer::all(),
        'awards' => \App\Award::all()
    ]);
});

Route::get('awards', function() {
    return view('awards-list', [
        'awards' => \App\Award::all()
    ]);
});

Route::get('producers', function() {
    return view('producers-list', [
        'producers' => \App\Producer::all()
    ]);
});

Route::get('/', function () {
    return view('index', [
        'wines' => \App\Wine::all()
    ]);
});
