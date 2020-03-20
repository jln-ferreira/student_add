<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Company;

class controllerListCompanies extends Controller
{
    //ILL FIND EVERY INFOMRATION INSERTED IN DB
	//LIST OF COMPANIES
    public function newCompany(){

    	//using model to access database -> gonna access companies DB -> name model need to be singular
    	//eloquent
    	$companies = Company::all();

    	return view('showCompany', compact('companies'));
    }

    //EDIT COMPANY (SEND INFORMATION TO FORMS)
    public function editCompany($companyId){

		$companies = Company::find($companyId);

		return view('masterCompany', compact('companies'));

    }
}
