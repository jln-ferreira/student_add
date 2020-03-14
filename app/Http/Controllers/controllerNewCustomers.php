<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class controllerNewCustomers extends Controller
{
	//ILL FIND EVERY INFOMRATION INSERTED IN DB
	//LIST OF CUSTOMERS
    public function newCustomer(){
    	return view('newCustomer');
    }
}
