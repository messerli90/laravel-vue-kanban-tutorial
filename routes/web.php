<?php

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
Auth::routes();

Route::get('/home', function () {
    return redirect()->route('tasks.index');
})->name('home');
// Use 'resource' to create all the CRUD routes for our controller,
// and add the 'auth' middleware
Route::put('tasks/sync', 'TaskController@sync')->middleware('auth')->name('tasks.sync');
Route::resource('tasks', 'TaskController', ['middleware' => 'auth']);
Route::resource('statuses', 'StatusController', ['middleware' => 'auth']);
