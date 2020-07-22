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

Route::get('/login', function () {
    return view('login');
});

// Route::get('/register', function () {
//     return view('register');
// });

Route::get('/home', function () {
    return view('home');
});

Route::get('/incubator', function () {
    return view('incubator');
});

Route::get('/adddata', function () {
    return view('adddata');
});

Route::get('/user.addregis', function () {
    return view('user.addregis');
});

Route::resource('user', 'UsersController'); 
Route::resource('incubator', 'IncubatorController');
Route::resource('device', 'DeviceController');


 

