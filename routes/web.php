<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PrescriptionController;
use App\Http\Controllers\aninController;
use App\Http\Controllers\loginController;
use App\Http\Controllers\userLoginController;
use App\Http\Controllers\clientController;
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

// Route::get('/', 'about@about');
Route::get('/prescription-view', function(){
    return view('prescription');
});
Route::get('/prescription-json', 'PrescriptionController@apiReturn');
Route::apiResource('/flights', 'flightsController');
Route::apiResource('/user', 'userController');
Route::apiResource('/prescription', 'PrescriptionController');
Route::apiResource('/anin', 'aninController');
Route::apiResource('/login', 'loginController');
Route::apiResource('/user-login', 'userLoginController');
Route::apiResource('/client', 'clientController');
Route::get('/anin-view', function(){
    return view('anin');
});

Route::get('/login-view', function(){
    return view('login');
});

Route::get('/user-login', function(){
    return view('userLogin');
});

Route::get('/client', function(){
    return view('client');
});
Route::get('/restapishow', function(){
    return view('restapishow');
});

Route::get('/', function(){
    return view('homepage');
});

// Route::get('/prescription', function(){
//     return view('prescriptionList');
// });