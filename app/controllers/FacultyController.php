<?php

class FacultyController extends \BaseController {
	function __construct(){
		$this->beforeFilter('@filterauth');
	}
	function filterauth(){
		if(!Auth::user()->check() && !Auth::teacher()->check()){
			return Redirect::to('/');
		}
	}
	function index(){
		$data['page'] = __FUNCTION__;
		return View::make('faculty.home',$data);
	}
	function student(){
		$data['page'] = __FUNCTION__;
		$data['sub_page'] = 'list';
		$data['students'] = User::all();
		return View::make('faculty.student',$data);
	}
	function student_add(){
		$data['page'] = 'student';
		$data['sub_page'] = __FUNCTION__;
		return View::make('faculty.student',$data);		
	}
}
