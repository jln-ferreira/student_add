<!-- HERE IN COMSPANYMASTERS.BLADE.PHP im gonna insert all information that i want to pass to layout -->
@extends('layout')

<!-- HEADER -->
@section('header', 'Company')

 <!--start to do an input -->
@section('info_Body')

<div class="container">
  <div class=".col-lg-6">

<!-- END SUCCESS MESSAGE -->

	<!-- SUBMIT FORM -> companies -->
	@if(!isset($companies))

	 <!-- BUTTON TO CHANGE pages -->
  	<div class=".col-lg-12" style="text-align: right;">
  		<a href="companies" class="btn btn-success">View Companies</a>
  	</div>
    <div class=".col-lg-12" style="text-align: right; margin-top: 10px; ">
        <a href="./" class="btn btn-warning">Relationship</a>
    </div>

    <form method="POST" action="newCompany" > <!-- gonna send to other page with all information. see on Route::post -->
    	@csrf
    	<div class="form-group">
        	<label for="inputName">Name</label>
        	<input type="text" class="form-control" id="inputName" name="inputName" placeholder="Enter Name" required>
        </div>
        <div class="form-group">
        	<label for="inputAddress">Address</label>
        	<input type="text" class="form-control" id="inputAddress" name="inputAddress" placeholder="Enter Address"  required>
        </div>
    	<div class="form-group">
        	<label for="inputPhone">Phone Number</label>
        	<input type="text" class="form-control" id="inputPhone" name="inputPhone" placeholder="Enter Phone number"  required>
        </div>
    	<div class="form-group">
        	<label for="inputSector">Sector</label>
        	<input type="text" class="form-control" id="inputSector" name="inputSector" placeholder="Enter Sector"  required>
    	</div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>

        <!-- BUTTON TO CHANGE pages -->
    <div class=".col-lg-12" style="text-align: right;">
        <a href="./" class="btn btn-info">Change student</a>
    </div>

	<!-- EDIT FORM -> STUDENTS -->
    @else
    <form method="POST" action="updateCompany" > <!-- gonna send to other page with all information. see on Route::post -->
		@csrf
    	{{ method_field('PATCH') }} <!-- UPDATE -->

    	<div class="form-group">
        	<label for="inputName">Name</label>
        	<input type="text" class="form-control" id="inputName" name="inputName" placeholder="Enter Name" value="{{$companies->name}}" required>
        </div>
        <div class="form-group">
        	<label for="inputAddress">Address</label>
        	<input type="text" class="form-control" id="inputAddress" name="inputAddress" placeholder="Enter Address" value="{{$companies->address}}"  required>
        </div>
    	<div class="form-group">
        	<label for="inputPhone">Phone Number</label>
        	<input type="text" class="form-control" id="inputPhone" name="inputPhone" aria-describedby="emailHelp" placeholder="Enter Phone number" value="{{$companies->phone}}"  required>
        </div>
    	<div class="form-group">
        	<label for="inputSector">Sector</label>
        	<input type="text" class="form-control" id="inputSector" name="inputSector" placeholder="Enter Sector" value="{{$companies->sector}}"  required>
    	</div>
        <button type="edit" class="btn btn-info">edit</button>
        <a href=".././" class="btn btn-danger">back</a>
    </form>
	@endif
  </div>
</div>
@stop
