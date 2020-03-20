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
//GONNA ACCESS INPUT NEW STUDENT
Route::get('/', 'master@index');
//GONNA ACCESS INPUT NEW COMPANY
Route::get('/inputCompany', 'controllerCompanyMaster@index');


//----------------------------CRUD------------------------
//-----Student
//ADD NEW STUDENT (cannot access URL)
Route::post('/newStudent', 'master@addStudent');
//UPDATE STUDENTS
Route::patch('/customers/{studentId}/UpdateStudent', 'master@updateStudent');
//DELETE STUDENTS
Route::get('/customers/{studentId}/DeleteStudent', 'master@deleteStudent');

//-----Company
//ADD NEW COMPANY (cannot access URL)
Route::post('/newCompany', 'controllerCompanyMaster@addCompany');
//UPDATE COMPANY
Route::patch('/companies/{companyId}/updateCompany', 'controllerCompanyMaster@updateCompany');
//DELETE COMPANY
Route::get('/companies/{companyId}/dseleteCompany', 'master@deleteStudent');


//-----------------------show STUDENTS----------------------
//ACCESS MY ALL INFORMATION INSIDE DB STUDENTS
Route::get('/customers', 'controllerListCustomers@newCustomer');

//ACCESS ESPECIFIC STUDENT
Route::get('/customers/{id}', 'controllerListCustomers@showSingleStudent');

//EDIT ESTUDENTS ==> button goes to index
Route::get('/customers/{studentId}/edit', 'controllerListCustomers@editEtudent');


//-----------------------show COMPANIES----------------------
//ACCESS MY ALL INFORMATION INSIDE DB COMPANY
Route::get('/companies', 'controllerListCompanies@newCompany');
//EDIT ESTUDENTS ==> button goes to index
Route::get('/companies/{companyId}/edit', 'controllerListCompanies@editCompany');



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
