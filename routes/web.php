<?php

use App\Models\Client;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});


Route::get('clients', function () {
    return view('clients.index', [
        'clients' => Client::all(),
    ]);
})->name('clients.index');

Route::get('clients/create', function () {
    return view('clients.create');
})->name('clients.create');

Route::post('clients', function (Request $request) {
    return redirect('clients');
})->name('clients.store');

Route::get('clients/{client}', function (Client $client) {
    return view('clients.show', ['client'=> $client]);
})->name('clients.show');

Route::get('clients/{client}/edit', function (Client $client) {
    return view('clients.edit',['client'=> $client]);
})->name('clients.edit');

Route::put('clients/{client}', function (Request $request, Client $client) {
    return redirect('clients');
})->name('clients.update');

Route::delete('clients/{client}', function (Client $client) {
    return redirect('clients');
})->name('clients.destroy');

// GET | POST | PUT | DELETE
// CRUD -> Create, Read, Update e Delete

// index    GET     /clients
// store    POST    /clients
// create   GET     /clients/create
// show     GET     /clients/{client}
// edit     GET     /clients/{client}/edit
// update   PUT     /clients/{client}
// destroy  DELETE  /clients/{client}
