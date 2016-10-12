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
Route::get('/level', [
    'as' => 'level',
    function () {
        return view('settings.level');
    }
]);

Route::get('/api/levels', [
    'as' => 'levels',
    'uses' => 'LevelController@getLevels'
]);
Route::post('api/level_add', [
    'as' => 'level.add',
    'uses' => 'LevelController@postAddLevel'
]);
Route::post('api/level_update', [
    'as' => 'level.update',
    'uses' => 'LevelController@postUpdateLevel'
]);
Route::post('api/level_delete', [
    'as' => 'level.delete',
    'uses' => 'LevelController@postDeleteLevel'
]);

// End of Level
// Start of Year
Route::get('/year', [
    'as' => 'year',
    function () {
        return view('settings.year');
    }
]);

Route::get('/api/years', [
    'as' => 'years',
    'uses' => 'YearController@getYears'
]);
Route::post('api/year_add', [
    'as' => 'year.add',
    'uses' => 'YearController@postAddYear'
]);
Route::post('api/year_update', [
    'as' => 'year.update',
    'uses' => 'YearController@postUpdateYear'
]);
Route::post('api/year_delete', [
    'as' => 'year.delete',
    'uses' => 'YearController@postDeleteYear'
]);

// End of Year
// Start of Course
Route::get('/course', [
    'as' => 'course',
    function () {
        return view('settings.courses');
    }
]);
Route::get('/api/courses', [
    'as' => 'courses',
    'uses' => 'CourseController@getCourses'
]);
Route::post('api/course_add', [
    'as' => 'course.add',
    'uses' => 'CourseController@postAddCourse'
]);
Route::post('api/course_update', [
    'as' => 'course.update',
    'uses' => 'CourseController@postUpdateCourse'
]);
Route::post('api/course_delete', [
    'as' => 'course.delete',
    'uses' => 'CourseController@postDeleteCourse'
]);
// End of Course
// Start of Major
Route::get('/major', [
    'as' => 'major',
    function () {
        return view('settings.major');
    }
]);
Route::get('/api/majors', [
    'as' => 'majors',
    'uses' => 'MajorController@getMajors'
]);
Route::post('api/major_add', [
    'as' => 'major.add',
    'uses' => 'MajorController@postAddMajor'
]);
Route::post('api/major_update', [
    'as' => 'major.update',
    'uses' => 'MajorController@postUpdateMajor'
]);
Route::post('api/major_delete', [
    'as' => 'major.delete',
    'uses' => 'MajorController@postDeleteMajor'
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
//Account Approval
Route::get('/api/users', [
    'as' => 'users',
    'uses' => 'UserController@getUsers2'
]);
Route::get('/api/users_all', [
    'as' => 'users.all',
    'uses' => 'UserController@getUsers3'
]);


Route::get('/account_approval', [
    'as' => 'account.approval',
    function () {
        return view('users.account_approval');
    }
]);
Route::post('/api/approve_account', [
    'as' => 'account.approve',
    'uses' => 'UserController@accountApproval'
]);
//End of Account Approval
//Start of User Management
Route::get('/user_management', [
    'as' => 'user.management',
    function () {
        return view('users.user_management');
    }
]);
Route::get('/card_releasing', [
    'as' => 'card.releasing',
    function () {
        return view('users.id-card-releasing');
    }
]);
Route::post('/api/active_account', [
    'as' => 'account.active',
    'uses' => 'UserController@accountActive'
]);
//End of User Management

//Start of Roles
Route::get('/api/roles', [
    'as' => 'roles',
    'uses' => 'RoleController@getRoles'
]);
Route::post('/api/change_role', [
    'as' => 'role.change',
    'uses' => 'UserController@changeRole'
]);
//End of Roles
// End of Api's

