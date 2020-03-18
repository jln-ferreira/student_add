<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\student;

// use DB;


class controllerListCustomers extends Controller
{
    //ILL FIND EVERY INFOMRATION INSERTED IN DB
	//LIST OF CUSTOMERS
    public function newCustomer(){

    	//using model to access database -> gonna access studentS DB -> name model need to be singular
    	//eloquent
    	$students = student::all();

    	//fetch all information inside mysql
    	//$students = DB::table('students')->get();


    	return view('showCustomer', compact('students'));
    }

    //GONNA SHOW EXPECIFIC STUDENT
    public function showSingleStudent($id){
    	$student = student::find($id);

    	return view('showCustomer',compact('student'));
    }

    //EDIT STUDENTS (SEND INFORMATION TO FORMS)
    public function editEtudent(student $studentId){

		$id    		  = $studentId->id;
    	$firstName    = $studentId->firstName;
		$lastName     = $studentId->lastName;
		$Email        = $studentId->Email;
		$phoneNumber  = $studentId->phoneNumber;

		$studentArr = [$id, $firstName, $lastName, $Email, $phoneNumber];

    	return view('master', compact('studentArr'), compact($studentId)); 
    }
}

