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
    Route::get('/subjectEnroll', 'SubjectController@subjectEnroll')->name('student.subjectEnroll');
    Route::post('/changePassword', 'SettingController@changePassword');

//Api
    Route::get('api/subjects/session/get/{id}', 'SubjectController@getSession');
    Route::get('api/subjects', 'SubjectController@subjects');

    Route::get('/profile', 'StudentProfileController@view')->name('student.profile');
});


// Admin
Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
