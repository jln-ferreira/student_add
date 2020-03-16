<!-- HERE IN MASTERS.BLADE.PHP im gonna insert all information that i want to pass to layout -->
@extends('layout')


 <!--start to SHOW every information at mySQL -->
@section('info_student')
<div class="container">
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
			<!-- showing all data of database -->
			@foreach ($students as $student)
			    <tr>
					<td>{{ $student->id }}</td>
			        <td>{{ $student->firstName }}</td>
			        <td>{{ $student->lastName }}</td>
			        <td>{{ $student->Email }}</td>
			        <td>{{ $student->phoneNumber }}</td>
			        <td>{{ $student->createdAt }}</td>
			        <td>
						<a href='' class='btn btn-danger customer_Delete'>delete</a>
			        </td>
			    </tr>       
			@endforeach
			</tbody>
		</table>
	</div>
</div>
@stop