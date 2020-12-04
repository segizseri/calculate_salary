@extends('master')
@section('title', 'Calculate salary of employees')
@section('content')
<div class="row">
			<div class="col-sm-10">
				<h1>Calculate salary of employees</h1>

			<table class="table table-striped">
				  <thead>
				    <tr>
				      <th scope="col">№</th>
				      <th scope="col">Name</th>
				      <th scope="col">Age</th>
				      <th scope="col">Child</th>
				      <th scope="col">Company car</th>
				      <th scope="col">Salary</th>
				      <th scope="col">Total</th>
				    </tr>
				  </thead>
				  <tbody>
@foreach ($employeesA as $employe)
				   <tr>
				      <th> {{$employe->id}} </th>
                      <td> {{$employe->name}} </td>
				      <td> {{$employe->age}}  </td>
                      <td> {{$employe->child}}  </td>
				      <td> {{$employe->ccar}} </td>
                      <td> {{$employe->salary}} </td>
				      <td> {{ $resultArr[$employe->name] }}</td>
                     
				    </tr>
@endforeach
				  </tbody>
				</table>

				
			</div>
@endsection	
