<!-- HERE IN MASTERS.BLADE.PHP im gonna insert all information that i want to pass to layout -->
@extends('layout')

<!-- HEADER -->
@section('header', 'Relationship')

 <!--start to SHOW every information at mySQL -->
@section('info_Body')
<div class="container">
	<!-- button for goback to input student -->
  	<div class=".col-lg-12" style="text-align: right; margin-bottom: 10px;">
  		<a href="./" class="btn btn-danger">Back</a>
  	</div>
	@foreach ($companies as $company)
		<div class="col-lg-4" style="display: inline-block; width: 33%; vertical-align: top;">
			<table class="table table-bordered">
			  	<thead  class="thead-dark">
			  		<tr>
			  			<th>id</th>
						<th>Name</th>
			  		</tr>
				  	<tr>
						<th>{{$company->id}}</th>
						<th>{{$company->name}}</th>
				    </tr>
			  	</thead>
				<tbody>

				<!-- THIS SESSION GONNA SHOW ALL INFORMATION IN MY DB -->
				@foreach ($company->students as $student)
				    <tr>
						<td>{{ $student->id }}</td>
				        <td>{{ $student->firstName }}</td>
				    </tr>    
				@endforeach
				</tbody>
			</table>
		</div>
	@endforeach
</div>
@stop