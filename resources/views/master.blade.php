<!-- HERE IN MASTERS.BLADE.PHP im gonna insert all information that i want to pass to layout -->
@extends('layout')

 <!--start to do an input -->
@section('info_student')

<div class="container">
  <div class=".col-lg-6">
    <form method="POST" action="newStudent" > <!-- gonna send to other page with all information. see on Route::post -->
    	@csrf
    	<div class="form-group">
        	<label for="inputFirstName">First Name</label>
        	<input type="text" class="form-control" id="inputFirstName" name="inputFirstName" placeholder="Enter first name">
        </div>
        <div class="form-group">
        	<label for="inputLastname">Last Name</label>
        	<input type="text" class="form-control" id="inputLastname" name="inputLastname" placeholder="Enter Last name">
        </div>
    	<div class="form-group">
        	<label for="inputEmail">Email address</label>
        	<input type="email" class="form-control" id="inputEmail" name="inputEmail" aria-describedby="emailHelp" placeholder="Enter email">
        </div>
    	<div class="form-group">
        	<label for="inputPhone">Phone Number</label>
        	<input type="Number" class="form-control" id="inputPhone" name="inputPhone" placeholder="Enter Phone number">
    	</div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
  </div>
</div>

@stop