<!-- HERE IN MASTERS.BLADE.PHP im gonna insert all information that i want to pass to layout -->
@extends('layout')

<!-- showing all data of database -->
@foreach ($dataWithFetch as $key => $order)
    <tr>
		<td>" . $order['id'] . "</td>
        <td>" . $order['firstName'] . "</td>
        <td>" . $order['lastName'] . "</td>
        <td>" . $order['email'] . "</td>
        <td>" . $order['phone'] . "</td>
        <td>
			<a href='' class='btn btn-info customer_Edit'>edit</a>
			<a href='' class='btn btn-danger customer_Delete'>delete</a>
        </td>
    </tr>;        
@endforeach