<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class master extends Controller
{
	//CONTROLLER OF MY MAIN - INDEX
    public function index(){
    	return view('master');
    }
}
