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

Route::get('/', function () {
    return redirect('/home');
});
Route::get('/home', function () {
    return view('todolist.createToDoList');
});

// Route::post('/home', 'taskcontroller@createnewlist');

Route::get('/home','taskcontroller@showList');

// Route::get('/home/delete/{id}', 'taskcontroller@deleteList');

Auth::routes();

// Route::group(['middleware'=>'auth'],function()
Route::group(['middleware'=>'App\Http\Middleware\AdminMiddleware'],function()
{
	Route::post('/home', 'taskcontroller@createnewlist');

	Route::get('/home/delete/{id}', 'taskcontroller@deleteList');
});


// Route::get('/home', 'HomeController@index')->name('home');
