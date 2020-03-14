<?php

//here is my directory
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HelloController extends Controller
{
    //
    public function hello($id){
    	return 'hello world  ' . $id;
    }
}
