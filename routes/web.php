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

// Main Site

Route::get('/', 'SessionController@create');

Route::post('/login','SessionController@store')->name('login');;

Route::get('/logout','SessionController@destroy');

Route::get('/register','RegistrationController@create');

Route::post('/register','RegistrationController@store')->name('register');

// Lecturer Site

Route::get('/dashboard','CourseController@index')->name('home');

Route::get('/addcourse','CourseController@create');

Route::post('/addcourse','CourseController@store');

Route::get('/editcourse/{id}','CourseController@edit');

Route::patch('/editcourse/{id}','CourseController@update');

Route::delete('/delcourse/{id}','CourseController@destroy');

Route::get('/create_question','QuestionController@create');

Route::post('/create_question','QuestionController@store');

Route::get('/getquestion/{id}','QuestionController@getquestion');

Route::get('/courses','QuestionController@select_course');

Route::get('/courses/{courses}','QuestionController@select_folder');

Route::get('/course/{course_id}/folder/{folder_id}','QuestionController@select_question');

Route::post('/course/{course_id}/folder/{folder_id}','QuestionController@store_question');

Route::post('/course/{course_id}/folder/{folder_id}/files','QuestionController@store_files');

Route::get('/files','FileController@index');

Route::get('/files/{id}','FileController@show');

Route::delete('/delfile/{id}','FileController@destroy');

Route::get('/list_questions/{id}','FileController@getData');

Route::post('/documents/{id}','FileController@documents');

Route::get('/profile','HomeController@edit');

Route::post('/profile','HomeController@update');

Route::get('/setting','HomeController@show');

Route::post('/setting','HomeController@change');
