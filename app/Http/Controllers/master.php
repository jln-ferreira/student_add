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
			//'createdAt'	  => $request->get();
    	]);
    	//save mySQL
    	$student->save();
        // go back to the same page '/' and insert a message Student added
        return back()->with('message_AddStudent', 'Student added!');
    }

    //UPDATE STUDENTS
    public function updateStudent(Request $request, student $studentId){

        //use inputs to update mySQL
        $studentId->firstName = $request->input('inputFirstName');
        $studentId->lastName = $request->input('inputLastname');
        $studentId->Email = $request->input('inputEmail');
        $studentId->phoneNumber = $request->input('inputPhone');
        $studentId->save();

        //$studentId->update($request->all());
        return redirect('customers')->with('message_EditedStudent', 'Student edited!');
    }
}
