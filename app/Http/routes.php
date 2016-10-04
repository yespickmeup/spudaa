<?php

/*
  |--------------------------------------------------------------------------
  | Application Routes
  |--------------------------------------------------------------------------
  |
  | Here is where you can register all of the routes for an application.
  | It's a breeze. Simply tell Laravel the URIs it should respond to
  | and give it the controller to call when that URI is requested.
  |
 */

Route::get('/', function () {
    return view('welcome');
});

Route::auth();

Route::get('user/activation/{token}', 'Auth\AuthController@activateUser')->name('user.activate');


Route::get('/home', 'HomeController@index');


Route::get('/signup', [
    'as' => 'signup',
    function () {
        return view('users.signup');
    }
]);

Route::get('/registered', [
    'as' => 'registered',
    function () {
        return view('users.signup-registered');
    }
]);



Route::get('/signin', [
    'as' => 'signin',
    function () {
        return view('users.signin');
    }
]);



// Api's
// Start of Level
Route::get('/api/levels', [
    'as' => 'levels',
    'uses' => 'LevelController@getLevels'
]);
// End of Level
// Start of Year
Route::get('/api/years', [
    'as' => 'years',
    'uses' => 'YearController@getYears'
]);
// End of Year
// Start of Course
Route::get('/api/courses', [
    'as' => 'courses',
    'uses' => 'CourseController@getCourses'
]);
// End of Course
// Start of Major
Route::get('/api/majors', [
    'as' => 'majors',
    'uses' => 'MajorController@getMajors'
]);
// End of Major
// Start of User

Route::post('/api/user/signup', [
    'as' => 'user.signup',
    'uses' => 'UserController@postSignup'
]);

Route::get('/api/user/exists/{email}', [
    'as' => 'user.exists',
    'uses' => 'UserController@getCheckEmailIfExists'
]);

// End of User
// End of Api's

