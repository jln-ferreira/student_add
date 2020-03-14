<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class aboutController extends Controller
{
	//gonna view resourses > view > about.blade.php
	//after about, insert json
    public function about(){
    	$firstName = 'Mariana';
    	$lastName = 'vilela';

    	return view('about', compact('firstName','lastName'));

    	//return view('about', ['firstName' => 'Mariana', 'lastName' => 'vilela']);
    }
}
