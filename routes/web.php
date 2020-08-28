<?php
Route::get('/', 'HomeController@index')->name('home')->middleware('auth');

Route::resource('testing', 'TestController');
Route::resource('classes', 'ClassController');
Route::resource('teachers', 'TeacherController');
Route::resource('students', 'StudentController');

Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');

Route::get('/home', 'HomeController@index')->name('home')->middleware('auth');
