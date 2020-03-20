<!-- HERE IN MASTERS.BLADE.PHP im gonna insert all information that i want to pass to layout -->
@extends('layout')

<!-- HEADER -->
@section('header', 'Company')

 <!--start to SHOW every information at mySQL -->
@section('info_Body')
<div class="container">
	<div class=".col-lg-6">
		<table class="table">
		  	<thead>
			  	<tr>
					<th>Id</th>
					<th>Name</th>
					<th>Address</th>
					<th>Phone</th>
					<th>Sector</th>
					<th>Created At</th>
			    	<th></th>
			    </tr>
		  	</thead>
			<tbody>
			
			<!-- if there is value in $student, came from controllerNewCustomer -->
			<!-- if i insert  a number on URL -->
			<!-- @if(!isset($student)) -->

			<!-- THIS SESSION GONNA SHOW ALL INFORMATION IN MY DB -->
			@foreach ($companies as $company)
			    <tr>
					<td>{{ $company->id }}</td>
			        <td>{{ $company->name }}</td>
			        <td>{{ $company->address }}</td>
			        <td>{{ $company->phone }}</td>
			        <td>{{ $company->sector }}</td>
			        <td>{{ $company->createdAt }}</td>
			        <td>
			        	<a href="companies/{{$company->id}}/edit" class='btn btn-info'>edit</a>
						<a href="companies/{{$company->id}}/DeleteStudent" class='btn btn-danger'>delete</a>
			        </td>
			    </tr>    
			@endforeach
			<!-- IF there is a number on URL after NEW (new/1), this gonna show -->
			@else
				 <tr>
					<td>{{ $company->id }}</td>
			        <td>{{ $company->name }}</td>
			        <td>{{ $company->address }}</td>
			        <td>{{ $company->phone }}</td>
			        <td>{{ $company->sector }}</td>
			        <td>{{ $company->createdAt }}</td>
			        <td></td>
			    </tr>  
			@endif
			</tbody>
		</table>
	</div>
</div>
@stop