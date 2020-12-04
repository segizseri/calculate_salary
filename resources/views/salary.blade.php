@extends('master')
@section('title', 'Calculate salary of employees')
@section('content')
<div class="container">
	<div class="row">
				<div class="col-md-3">
					<a href="{{route('list')}}" class="btn btn-success">Calculate</a>
				</div>	
				<div class="col-md-8">
					<h1>Add new employe</h1>
					<form action="{{route('employe-add')}}" method="POST" enctype="multipart/form-data">
							@csrf
						<div class="form-group">
							<label for="name">Name</label>
							<input type="text" name="name" placeholder="Enter Name" id="name" class="form-control">
						<div class="form-group">
							<label for="age">Age</label>
							<input type="text" name="age" placeholder="Enter Age" id="age" class="form-control">						
						</div>										
						<div class="form-group">
							<label for="child">Child</label>
							<input type="text" name="child" placeholder="Enter Child" id="child" class="form-control">						
						</div>	
						<div class="form-group">
							<label for="ccar">Using the company car</label>
							<input type="checkbox" name="ccar" placeholder="Check Company Car" id="ccar">						
						</div>	
					    <div class="form-group">
							<label for="salary">Salary</label>
							<div class="input-group-prepend">
								<input type="text" name="salary" placeholder="Enter Salary" id="salary" class="form-control">
								<span class="input-group-text">$</span>
							</div>							
						</div>						
						
						<button type="submit" class="btn btn-success" mt-5> Save </button>

					</form>
				</div>

	
	</div>
</div>

@endsection	
