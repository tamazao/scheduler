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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index');
Route::resource('meeting','MeetingController');
Route::resource('schedule','ScheduleController');
Route::resource('attendee','AttendeeController');

Route::get('{meeting_id}/schedule/create/', 'ScheduleController@create');
Route::get('{schedule_id}/attendee/create/','AttendeeController@create');
Route::get('{schedule_id}/attendee/', 'AttendeeController@index');
