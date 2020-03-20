<!-- HERE IN MASTERS.BLADE.PHP im gonna insert all information that i want to pass to layout -->
@extends('layout')

<!-- HEADER -->
@section('header', 'Student')

 <!--start to do an input -->
@section('info_Body')

<div class="container">
  <div class=".col-lg-6">

<!-- END SUCCESS MESSAGE -->

	<!-- SUBMIT FORM -> STUDENTS -->
	@if(!isset($students))

	 <!-- BUTTON TO CHANGE pages -->
  	<div class=".col-lg-12" style="text-align: right;">
  		<a href="customers" class="btn btn-success">View Students</a>
  	</div>

    <form method="POST" action="newStudent" > <!-- gonna send to other page with all information. see on Route::post -->
    	@csrf
    	<div class="form-group">
        	<label for="inputFirstName">First Name</label>
        	<input type="text" class="form-control" id="inputFirstName" name="inputFirstName" placeholder="Enter first name" required>
        </div>
        <div class="form-group">
        	<label for="inputLastname">Last Name</label>
        	<input type="text" class="form-control" id="inputLastname" name="inputLastname" placeholder="Enter Last name"  required>
        </div>
    	<div class="form-group">
        	<label for="inputEmail">Email address</label>
        	<input type="email" class="form-control" id="inputEmail" name="inputEmail" aria-describedby="emailHelp" placeholder="Enter email"  required>
        </div>
    	<div class="form-group">
        	<label for="inputPhone">Phone Number</label>
        	<input type="Number" class="form-control" id="inputPhone" name="inputPhone" placeholder="Enter Phone number"  required>
    	</div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>

    <!-- BUTTON TO CHANGE pages -->
    <div class=".col-lg-12" style="text-align: right;">
        <a href="inputCompany" class="btn btn-info">Change company</a>
    </div>

	<!-- EDIT FORM -> STUDENTS -->
    @else
    <form method="POST" action="UpdateStudent" > <!-- gonna send to other page with all information. see on Route::post -->
		@csrf
    	{{ method_field('PATCH') }} <!-- UPDATE -->

    	<div class="form-group">
        	<label for="inputFirstName">First Name</label>
        	<input type="text" class="form-control" id="inputFirstName" name="inputFirstName" placeholder="Enter first name" value="{{$students->firstName}}" required>
        </div>
        <div class="form-group">
        	<label for="inputLastname">Last Name</label>
        	<input type="text" class="form-control" id="inputLastname" name="inputLastname" placeholder="Enter Last name" value="{{$students->lastName}}"  required>
        </div>
    	<div class="form-group">
        	<label for="inputEmail">Email address</label>
        	<input type="email" class="form-control" id="inputEmail" name="inputEmail" aria-describedby="emailHelp" placeholder="Enter email" value="{{$students->Email}}"  required>
        </div>
    	<div class="form-group">
        	<label for="inputPhone">Phone Number</label>
        	<input type="Number" class="form-control" id="inputPhone" name="inputPhone" placeholder="Enter Phone number" value="{{$students->phoneNumber}}"  required>
    	</div>
        <button type="edit" class="btn btn-info">edit</button>
        <a href="../../" class="btn btn-danger">back</a>
    </form>
	@endif
  </div>
</div>
@stop
