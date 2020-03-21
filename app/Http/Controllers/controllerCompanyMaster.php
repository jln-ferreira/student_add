<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Company;

class controllerCompanyMaster extends Controller
{

	//access view to a company input
	public function index(){

		return view('masterCompany');
	}


   //POST for add Company
    public function addCompany(Request $request){

		// CREATE A NEW Company TO INSERT THE REQUEST $request->get(name fields);
    	$Company = new Company([
			// 'id'		  => $request->get();
			'name'   	  => $request->get('inputName'),
			'address'	  => $request->get('inputAddress'),
			'phone'		  => $request->get('inputPhone'),
			'sector' 	  => $request->get('inputSector')
			//'createdAt'	  => $request->get();
    	]);
   //  	//save mySQL
     	$Company->save();

        //show toastr on top of the page (ALERT)
        $notification = array(
            'message' => 'Company added!',
            'alert-type' => 'success'
        );
        // go back to the same page '/' and insert a message company added
        return back()->with($notification);
    }

    //UPDATE STUDENTS
    public function updateCompany(Request $request, Company $companyId){

        //use inputs to update mySQL
        $companyId->name = $request->input('inputName');
        $companyId->address = $request->input('inputAddress');
        $companyId->phone = $request->input('inputPhone');
        $companyId->sector = $request->input('inputSector');
        $companyId->save();

        //show toastr on top of the page (ALERT)
        $notification = array(
            'message' => 'Company updated!',
            'alert-type' => 'info'
        );

        //$studentId->update($request->all());
        return redirect('companies')->with($notification);
    }

    //DELETE STUDENTS
    public function deleteCompany($companyId){

        Company::find($companyId)->delete();

        //show toastr on top of the page (ALERT)
        $notification = array(
            'message' => 'Company deleted!',
            'alert-type' => 'warning'
        );

        return back()->with($notification);
    }




    //show all relationship COMPANIES X STUDENT/CUSTOMERS
    public function relationship(){

        // fetch all information inside company DB
        $companies = Company::all();


        return view('relationshipCompany', compact('companies'));
    }
}
