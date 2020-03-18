<!-- HERE IN MASTERS.BLADE.PHP im gonna insert all information that i want to pass to layout -->
@extends('layout')


 <!--start to SHOW every information at mySQL -->
@section('info_student')
<div class="container">

	
	<!-- SUCESS MESSAGE AFTER EDITED STUDENT INTO DATABASE -->
	@if(session()->has('message_EditedStudent'))
	    <div class="alert alert-success">
	        {{ session()->get('message_EditedStudent') }}
	    </div>
	@endif
	<!-- END SUCCESS MESSAGE -->


	<div class=".col-lg-6">
		<table class="table">
		  	<thead>
			  	<tr>
					<th>Id</th>
					<th>First Name</th>
					<th>Last Name</th>
					<th>Phone</th>
					<th>Phone Number</th>
					<th>Created At</th>
			    	<th></th>
			    </tr>
		  	</thead>
			<tbody>
			
			<!-- if there is value in $student, came from controllerNewCustomer -->
			<!-- if i insert  a number on URL -->
			@if(!isset($student))

			<!-- THIS SESSION GONNA SHOW ALL INFORMATION IN MY DB -->
			@foreach ($students as $student)
			    <tr>
					<td>{{ $student->id }}</td>
			        <td>{{ $student->firstName }}</td>
			        <td>{{ $student->lastName }}</td>
			        <td>{{ $student->Email }}</td>
			        <td>{{ $student->phoneNumber }}</td>
			        <td>{{ $student->createdAt }}</td>
			        <td>
			        	<a href="customers/{{$student->id}}/edit" class='btn btn-info'>edit</a>
						<a href="customers/{{$student->id}}/DeleteStudent" class='btn btn-danger'>delete</a>
			        </td>
			    </tr>    
			@endforeach
			<!-- IF there is a number on URL after NEW (new/1), this gonna show -->
			@else
				 <tr>
					<td>{{ $student->id }}</td>
			        <td>{{ $student->firstName }}</td>
			        <td>{{ $student->lastName }}</td>
			        <td>{{ $student->Email }}</td>
			        <td>{{ $student->phoneNumber }}</td>
			        <td>{{ $student->createdAt }}</td>
			        <td></td>
			    </tr>  
			@endif
			</tbody>
		</table>
	</div>
</div>
@stop