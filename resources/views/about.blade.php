@extends('master') <!-- This gonna be a part of  master.blade.php. Gonna send all information-->

@section('sidebar') <!--Gonna find sidebar section on master -->
    @parent <!-- will not override -->
    <p>This ABOUT SideBar</p>
@endsection

@section('component')
<h1>About Us Page</h1>
@endsection







<!-- Info received from controller -->
<!-- <p>First Name: {{$firstName}}; </p>
<p>Last Name: {{$lastName}}; </p> -->