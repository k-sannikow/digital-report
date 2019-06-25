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

Route::get('/', 'User\ReportController@index')->name('index');
Route::get('/about', 'User\ReportController@about')->name('about');
Route::post('/', 'User\ReportController@calculate')->name('calculate');

// Route::any('/', function () {
//     dump(DigitalReport::percentageMark(5, 5));
// });

