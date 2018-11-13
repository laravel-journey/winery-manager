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

Route::post('add-wine', function(\Illuminate\Http\Request $request) {
    $wine = new \App\Wine();

    $wine->name = $request->get('name');
    $wine->year = $request->get('year');
    $wine->quantity = $request->get('quantity');
    $wine->price = $request->get('price');

    $wine->save();

    return redirect('/');
});

Route::get('add-wine', function() {
    return view('wine-add');
});

Route::get('/', function () {
    return view('index', [
        'wines' => \App\Wine::all()
    ]);
});
