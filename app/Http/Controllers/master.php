<?php

namespace App\Http\Controllers;

use App\student;
use App\Company;
use Illuminate\Http\Request;

class master extends Controller
{
	//CONTROLLER OF MY MAIN - INDEX
	//WHERE ILL FIND INPUT VALUES
    public function index(){

        $companies = Company::all();

    	return view('master', compact('companies'));
    }

    //POST for add students
    public function addStudent(Request $request){

		// CREATE A NEW STUDENT TO INSERT THE REQUEST $request->get(name fields);
    	$student = new student([
			// 'id'		  => $request->get();
			'firstName'   => $request->get('inputFirstName'),
			'lastName'	  => $request->get('inputLastname'),
			'Email'		  => $request->get('inputEmail'),
			'phoneNumber' => $request->get('inputPhone'),
            'company_id'  => $request->get('inputCompany')
			//'createdAt'	  => $request->get();
    	]);
    	//save mySQL
    	$student->save();

        //show toastr on top of the page (ALERT)
        $notification = array(
            'message' => 'Student added!',
            'alert-type' => 'success'
        );


        // go back to the same page '/' and insert a message Student added
        return back()->with($notification);
    }

    //UPDATE STUDENTS
    public function updateStudent(Request $request, student $studentId){

        //use inputs to update mySQL
        $studentId->firstName = $request->input('inputFirstName');
        $studentId->lastName = $request->input('inputLastname');
        $studentId->Email = $request->input('inputEmail');
        $studentId->phoneNumber = $request->input('inputPhone');
        $studentId->company_id = $request->input('inputCompany');
        $studentId->save();

        //show toastr on top of the page (ALERT)
        $notification = array(
            'message' => 'Student updated!',
            'alert-type' => 'info'
        );

        //$studentId->update($request->all());
        return redirect('customers')->with($notification);
    }

    //DELETE STUDENTS
    public function deleteStudent($studentId){

        student::find($studentId)->delete();

        //show toastr on top of the page (ALERT)
        $notification = array(
            'message' => 'Student deleted!',
            'alert-type' => 'warning'
        );

        return back()->with($notification);
    }

}
