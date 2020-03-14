<!-- This is the layout.blade - the main page. All other page gonna be accessed here -->
<!-- BASICALY THIS IS THE LAYOUT FOR THE OTHER PAGES -->
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Access Information</title>

	<!-- INCLUDE BOOTSTRAP and JQUERY -->
	@include('toolsUsed')


</head>
<body>
	<!-- MY HEADER -->
	@include('header')


	<!-- COMMING FROM MASTER -->
	<!-- INPUT OF STUDENTS (name, last name, email, phone number) -->
	@yield('inputs_students')


	
</body>
</html>