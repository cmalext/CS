<?php
Route::get('/', 'HomeController@index');
Route::get('about', 'HomeController@about');
Route::get('faculties', 'HomeController@faculties');
Route::get('org', 'HomeController@org');
Route::get('curriculum', 'HomeController@curriculum');
Route::get('login', 'HomeController@signin');
Route::get('student','StudentController@index');
//auth
Route::get('faculty', 'FacultyController@index');
Route::get('faculty/student', 'FacultyController@student');
Route::get('faculty/student/add', 'FacultyController@student_add');
Route::any('faculty/student/import', 'FacultyController@student_import');


Route::get('student',function(){
	return "student area is not yet implemented, please go to <a href='".url('/test')."'>Logout</a>";
});

Route::post('ajax/{name}', 'AjaxController@ajax');



Route::get('test', function(){
	Auth::user()->logout();
	Auth::teacher()->logout();
	Return Redirect::to('/');
	/*$user = new User;
	$user->username = '09305413';
	$user->password = Hash::make('123123123');
	$user->lastname = 'Tudtud';
	$user->firstname = 'Alexander';
	$user->middlename = 'Pacana';
	$user->course = 'BSICT';
	$user->year = 4;
	$user->email = 'paperstreetalex@gmail.com';
	$user->image = 'none';
	$user->save();*/
	/*$user = new Teacher;
	$user->username = '123123124';
	$user->password = Hash::make('123123123');
	$user->lastname = 'Doe';
	$user->firstname = 'John';
	$user->middlename = 'Middlename';
	$user->position = 1;
	$user->course = 'MSIT';
	$user->quote = '

Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.';
	$user->save();*/
	
});