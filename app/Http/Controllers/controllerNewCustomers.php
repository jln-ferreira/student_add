<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB; //to use DB

class controllerNewCustomers extends Controller
{
	//ILL FIND EVERY INFOMRATION INSERTED IN DB
	//LIST OF CUSTOMERS
    public function newCustomer(){

    	//fetch all information inside mysql
    	$students = DB::table('class')->get();


    	return view('newCustomer', compact('students'));
    }

}
