@extends('layouts.bootstrap4')

@section('title', 'Create User')

@section('content')
	<div class="row" style="margin: 5%;">
		<form method="POST" action="/users">
			@csrf
			<div class="form-row">
				<div class="form-group col-md-12">
					<label for="name">Name</label>
					<input type="text" class="form-control" name="name" id="name">
				</div>
				<div class="form-group col-md-12">
					<label for="lastname">Last name</label>
					<input type="text" class="form-control" name="lastname" id="lastname">
				</div>
				<div class="form-group col-md-12">
					<label for="password">Password</label>
					<input type="password" class="form-control" name="password" id="password">
				</div>
				<div class="form-group col-md-12">
			   		<label for="avatar">Avatar</label>
			    	<input type="file" class="form-control-file" name="avatar" id="avatar">
			  	</div>
			</div>
			<button type="submit" class="btn btn-primary text-center">Save</button>
		</form>
	</div>
@endsection