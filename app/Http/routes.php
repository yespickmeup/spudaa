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

Route::get('/api/user/{id}', [
    'as' => 'user',
    'uses' => 'UserController@getUser'
]);

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
//Start of Account
Route::get('/account', [
    'as' => 'user.account',
    function () {
        return view('account.account');
    }
]);
Route::post('/api/account/update', [
    'as' => 'account.update',
    'uses' => 'UserController@accountUpdate'
]);
Route::post('/fileUpload2', [
    'as' => 'fileUpload2',
    'uses' => 'UploadController@fileUpload2'
]);
Route::post('/fileUpload3', [
    'as' => 'fileUpload3',
    'uses' => 'UploadController@fileUploadBanner'
]);

//End of Account
//Start of Family Members
Route::get('/api/family_members/{user_id}', [
    'as' => 'account.family_members',
    'uses' => 'UserAlumniMembersController@getMembers'
]);
Route::post('/api/add_family_member', [
    'as' => 'account.add_family_members',
    'uses' => 'UserAlumniMembersController@postAddMember'
]);
Route::post('/api/update_family_member', [
    'as' => 'account.update_family_members',
    'uses' => 'UserAlumniMembersController@postUpdateMember'
]);
Route::post('/api/delete_family_member', [
    'as' => 'account.delete_family_members',
    'uses' => 'UserAlumniMembersController@postDeleteMember'
]);
//End of Family Members
//Start of Professional Service
Route::get('/api/professional_services/{user_id}', [
    'as' => 'account.professional_services',
    'uses' => 'UserAlumniProfessionalServiceController@getServices'
]);
Route::post('/api/add_professional_service', [
    'as' => 'account.add_professional_service',
    'uses' => 'UserAlumniProfessionalServiceController@postAddService'
]);
Route::post('/api/update_professional_service', [
    'as' => 'account.update_professional_service',
    'uses' => 'UserAlumniProfessionalServiceController@postUpdateService'
]);
Route::post('/api/delete_professional_service', [
    'as' => 'account.delete_professional_service',
    'uses' => 'UserAlumniProfessionalServiceController@postDeleteService'
]);
//End of Personal Service
////Start of Professional Service
Route::get('/api/personal_services/{user_id}', [
    'as' => 'account.personal_services',
    'uses' => 'UserAlumniPersonalServiceController@getServices'
]);
Route::post('/api/add_personal_service', [
    'as' => 'account.add_personal_service',
    'uses' => 'UserAlumniPersonalServiceController@postAddService'
]);
Route::post('/api/update_personal_service', [
    'as' => 'account.update_personal_service',
    'uses' => 'UserAlumniPersonalServiceController@postUpdateService'
]);
Route::post('/api/delete_personal_service', [
    'as' => 'account.delete_personal_service',
    'uses' => 'UserAlumniPersonalServiceController@postDeleteService'
]);
//End of Personal Service
//Start of Survey
Route::get('/surveys', [
    'as' => 'account.survey',
    function () {
        return view('account.account-survey');
    }
]);
Route::get('/api/employment_surveys/{user_id}', [
    'as' => 'account.employment_surveys',
    'uses' => 'UserEmploymentSurveyController@getSurvey'
]);
Route::get('/api/outcome_experiences/{user_id}', [
    'as' => 'account.outcome_experiences',
    'uses' => 'UserEducationOutcomeController@getOutcomeExperience'
]);
Route::get('/api/outcome_standards/{user_id}', [
    'as' => 'account.outcome_standards',
    'uses' => 'UserEducationOutcomeController@getOutcomeStandard'
]);
Route::get('/api/satisfication_surveys/{user_id}', [
    'as' => 'account.satisfication_surveys',
    'uses' => 'UserSatisfactionController@getSurvey'
]);
Route::post('/api/update_employment_survey', [
    'as' => 'account.update_employment_survey',
    'uses' => 'UserEmploymentSurveyController@postUpdateSurvey'
]);
Route::post('/api/update_educational_outcomes', [
    'as' => 'account.update_educational_outcomes',
    'uses' => 'UserEducationOutcomeController@postUpdateOutcome'
]);
Route::post('/api/update_satisfaction', [
    'as' => 'account.update_satisfaction',
    'uses' => 'UserSatisfactionController@postUpdateSatisfaction'
]);
//End of Survey
//Start of Preference
Route::get('/preferences', [
    'as' => 'settings.preferences',
    function () {
        return view('settings.preference');
    }
]);
Route::get('/api/preferences', [
    'as' => 'account.preferences',
    'uses' => 'PreferenceController@getPreference'
]);
Route::post('/api/update_preference', [
    'as' => 'account.update_preferences',
    'uses' => 'PreferenceController@postUpdatePreference'
]);
Route::get('/about-us', [
    'as' => 'about.us',
    function () {
        return view('about-us');
    }
]);
Route::get('/board-of-directors', [
    'as' => 'faculty.staff',
    function () {
        return view('team');
    }
]);
Route::get('/directors', [
    'as' => 'settings.directors',
    function () {
        return view('settings.faculty');
    }
]);
Route::post('api/send_email', [
    'as' => 'send.email',
    'uses' => 'UserController@postSendEmail'
]);
//End of Preference
// End of Api's

