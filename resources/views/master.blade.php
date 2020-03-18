<!-- HERE IN MASTERS.BLADE.PHP im gonna insert all information that i want to pass to layout -->
@extends('layout')

 <!--start to do an input -->
@section('info_student')

<div class="container">
  <div class=".col-lg-6">


<!-- SUCESS MESSAGE AFTER ADD STUDENT INTO DATABASE -->
@if(session()->has('message_AddStudent'))
    <div class="alert alert-success">
        {{ session()->get('message_AddStudent') }}
    </div>
@endif
<!-- END SUCCESS MESSAGE -->

	<!-- SUBMIT FORM -> STUDENTS -->
	@if(!isset($studentArr))
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

	<!-- EDIT FORM -> STUDENTS -->
    @else
    <form method="POST" action="" > <!-- gonna send to other page with all information. see on Route::post -->
    	@csrf
    	<div class="form-group">
        	<label for="inputFirstName">First Name</label>
        	<input type="text" class="form-control" id="inputFirstName" name="inputFirstName" placeholder="Enter first name" value="{{$studentArr[0]}}" required>
        </div>
        <div class="form-group">
        	<label for="inputLastname">Last Name</label>
        	<input type="text" class="form-control" id="inputLastname" name="inputLastname" placeholder="Enter Last name" value="{{$studentArr[1]}}"  required>
        </div>
    	<div class="form-group">
        	<label for="inputEmail">Email address</label>
        	<input type="email" class="form-control" id="inputEmail" name="inputEmail" aria-describedby="emailHelp" placeholder="Enter email" value="{{$studentArr[2]}}"  required>
        </div>
    	<div class="form-group">
        	<label for="inputPhone">Phone Number</label>
        	<input type="Number" class="form-control" id="inputPhone" name="inputPhone" placeholder="Enter Phone number" value="{{$studentArr[3]}}"  required>
    	</div>
        <button type="edit" class="btn btn-info">edit</button>
    </form>
	@endif

  </div>
</div>
@stop