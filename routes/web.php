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

date_default_timezone_set('Asia/Karachi');
Route::get('/', function () {
    return redirect('/viewbookings');
});

Route::get('/viewbookings','NuberController@AllBookings');
