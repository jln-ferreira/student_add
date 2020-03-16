<?php

namespace App\Http\Controllers;

use App\student;
use Illuminate\Http\Request;

class master extends Controller
{
	//CONTROLLER OF MY MAIN - INDEX
	//WHERE ILL FIND INPUT VALUES
    public function index(){
    	return view('master');
    }

    //POST for add students
    public function addStudent(Request $request){

		// CREATE A NEW STUDENT TO INSERT THE REQUEST $request->get(name fields);
    	$student = new student([
			// 'id'		  => $request->get();
			'firstName'   => $request->get('inputFirstName'),
			'lastName'	  => $request->get('inputLastname'),
			'Email'		  => $request->get('inputEmail'),
			'phoneNumber' => $request->get('inputPhone')
			// 'createdAt'	  => $request->get();
    	]);
    	//save mySQL
    	$student->save();
    }
}
