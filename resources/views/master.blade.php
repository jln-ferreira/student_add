<!-- HERE IN MASTERS.BLADE.PHP im gonna insert all information that i want to pass to layout -->
@extends('layout')

 <!--start to do an input -->
@section('inputs_students')

<div class="container">
  <div class=".col-lg-6">
    <form action="POST">
    	<div class="form-group">
        	<label for="inputFirstName">First Name</label>
        	<input type="text" class="form-control" id="inputFirstName" placeholder="Enter first name">
        </div>
        <div class="form-group">
        	<label for="inputLastname">Last Name</label>
        	<input type="text" class="form-control" id="inputLastname" placeholder="Enter Last name">
        </div>
    	<div class="form-group">
        	<label for="inputEmail">Email address</label>
        	<input type="email" class="form-control" id="inputEmail" aria-describedby="emailHelp" placeholder="Enter email">
        </div>
    	<div class="form-group">
        	<label for="inputPassword">Password</label>
        	<input type="password" class="form-control" id="inputPassword" placeholder="Password">
    	</div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
  </div>
</div>

@stop