<!-- This is the master.blade - the main page. All other page gonna be accessed here -->

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Access Information</title>

	<!-- INCLUDE BOOTSTRAP and JQUERY -->
	@include('toolsUsed')
	<!-- END BOOTSTRAP and JQUERY -->

</head>
<body>

	<!-- MY HEADER -->
	@include('header')
	<!-- END HEADER -->



	<!-- plays with segments -->
	@section('sidebar')
	<p>This is parent/ Master</p>
	@show <!-- this brings what i ask to come from about -->


	<div>
		@yield('component', 'teste nisso aqui') <!-- dinamic - gonna bring the information from about -->
	</div>

	<!-- access images and path  -->
	<!-- {{asset('new path')}} -->


	
</body>
</html>