<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//------------------PLAYING WITH URL: --------------------------
//Current URL. WHERE user sees: resource<view<master.blade.php
//-----------------------main PAGE---------------------------
// GONNA ACCESS INPUT NEW STUDENT
Route::get('/', 'master@index');

//ADD NEW STUDENT
Route::post('/newStudent', 'master@addStudent');


//-----------------------show STUDENTS----------------------
//ACCESS MY ALL INFORMATION INSIDE DB
Route::get('/customers', 'controllerListCustomers@newCustomer');

//ACCESS ESPECIFIC STUDENT
Route::get('/customers/{id}', 'controllerListCustomers@showSingleStudent');





//--------------------------LEARNING NOW HERE-----------------------------
//Here is, from our page, go to USER page
//and there, there is only "WELCOME WORLD"
Route::get('/hello', function () {
    return 'Welcome world';
});

//Here, Im going to send an ID inputted at IRL
Route::get('/user/{id}', function ($id) {
    return 'Welcome! Your id is ' . $id;
})->where('id','[0-9]+'); //regular expression: just accept numbers


//Street become possible or not to include. if not, there is padrao
Route::get('/address/{number}/{street?}', function ($number, $street = 'Milão') {
    return 'Your address is:<br>Number: ' . $number . '<br>Street: ' . $street;
})->where('number','[0-9]+'); //regular expression: just accept numbers



//USING CONTROLLER;
//URL, i set world -> (class HelloController [controller], @function hello)
Route::get('/world/{id}', 'HelloController@hello');
