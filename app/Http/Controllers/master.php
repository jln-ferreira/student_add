<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class master extends Controller
{
	//CONTROLLER OF MY MAIN - INDEX
	//WHERE ILL FIND INPUT VALUES
    public function index(){
    	return view('master');
    }
}
