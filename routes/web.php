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

// Route::get('/about', function () {
//     return view('about'); 
// });

Route::get('/', 'PagesController@home'); 
//  slash menunjukan menu utama laravel , PagesController@home merupakan nama kontroller dan menu yang didaftarkan

Route::get('/about', 'PagesController@about'); 


Route::get('/mahasiswa', 'MahasiswaController@index');

// Students cara panjang insert update delete
// Route::get('/students', 'StudentsController@index');
// Route::get('/students/create', 'StudentsController@create');  
// Route::get('/students/{student}', 'StudentsController@show');
// Route::post('/students', 'StudentsController@store');
// Route::delete('/students/{student}', 'StudentsController@destroy');
// Route::get('/students/{student}/edit', 'StudentsController@edit');
// Route::patch('/students/{student}', 'StudentsController@update');

// Students cara pendek insert update delete
Route::resource('students', 'StudentsController');






