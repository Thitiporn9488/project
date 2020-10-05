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
    return view('index_h');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/home', function () {
    return view('home');
});


Route::get('/adddata', function () {
    return view('adddata');
});

Route::get('/checklogin', function () {
    return view('checklogin');
});

Route::get('/addregis', function () {
    return view('addregis');
});

Route::get('/register', function () {
    return view('register');
});

Route::get('logout', function () {
    return view('logout');
});
Route::get('dbconnect', function () {
    return view('dbconnect');
});


// ลูกจ้าง
//  regis employee
Route::get('regis_em', function () {
    return view('employee.regis_em');
});
Route::get('/addregis_em', function () {
    return view('employee.addregis_em');
});
Route::get('home_em', function () {
    return view('employee.home_em');
});


//แอดมิน
// regis admin
Route::get('regis_ad', function () {
    return view('admin.regis_ad');
});
Route::get('/addregis_ad', function () {
    return view('admin.addregis_ad');
});

Route::get('/home_ad', function () {
    return view('admin.home_ad');
});

Route::get('index_ad', function () {
    return view('admin.index_ad');
});



//เจ้าของ
// โรงบ่ม
Route::get('index_in', function () {
    return view('rb.index_in');
});

Route::get('index_de', function () {
    return view('device.index_de');
});
Route::get('check_id', function () {
    return view('rb.check_id');
});
Route::get('check_key', function () {
    return view('rb.check_key');
});
Route::get('check_add', function () {
    return view('rb.check_add');
});

// กระบวนการ
Route::get('pro', function () {
    return view('pprocess.pro');
});
// กราฟสรุป
Route::get('graph', function () {
    return view('Summary graph.graph');
});



Route::get('calen', function () {
    return view('calendar.calen');
});



Route::resource('user', 'UsersController'); 
Route::resource('incub', 'IncubatorController');
Route::resource('device', 'DeviceController');
Route::post('update_in', 'IncubatorController@update_in');



// Route::put('edit', 'IncubatorController@update');
// Route::get('Delete', 'IncubatorController@destroy');
// Route::get('/Delete/{id_in}/delete', 'IncubatorController@destroy');
// Route::get('/edit/{id_in}/edit', 'IncubatorController@edit');
// Route::put('/edit','ProjectController@update');






 
