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


Auth::routes();

// Student

Route::group(['middleware' => ['auth']], function() {
    Route::get('/', 'HomeController@index');
    Route::get('/setting', 'SettingController@view')->name('student.setting');
    Route::get('/subjectsList', 'SubjectController@view')->name('student.subjects');
    Route::get('/subjectDetails/{id}', 'SubjectController@subjectDetail')->name('student.subjectDetails');
    Route::post('/changePassword', 'SettingController@changePassword');
});

Route::get('api/settings/get/{id}', 'SettingController@getSession');
Route::get('api/settings', 'SettingController@get');
Route::get('api/settings/subjects', 'SettingController@subjects');


// Admin
Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
