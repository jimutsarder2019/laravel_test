@extends('layouts.main')

@section('title', 'Registration')

@section('content')
	<form id="signup" method="POST" action="/register">
		<div class="header-area">
			<h3>Sign Up</h3> 
			<p>You want to fill out this form</p>    
		</div>
		<div class="sep"></div>
		
		@if(@$message)
			<div class="success">{{ @$message }}</div>
		@endif

		<div class="inputs">
			{{ csrf_field() }}
			<div class="form-group">
				<label for="name">Name:</label>
				<input type="text" class="form-control" id="name" name="name">
			</div>
			@if($errors->has('name'))
			    <div class="error">{{ $errors->first('name') }}</div>
		   		</br>
		    @endif

			<div class="form-group">
				<label for="email">Email:</label>
				<input type="email" class="form-control" id="email" name="email">
			</div>
			@if($errors->has('email'))
			    <div class="error">{{ $errors->first('email') }}</div>
			    </br>
		    @endif
	 
			<div class="form-group">
				<label for="password">Password:</label>
				<input type="password" class="form-control" id="password" name="password">
			</div>	
			@if($errors->has('password'))
			    <div class="error">{{ $errors->first('password') }}</div>
			    </br>
		    @endif
	 
			<div class="form-group">
				<label for="password_confirmation">Password Confirmation:</label>
				<input type="password" class="form-control" id="password_confirmation"
					   name="password_confirmation">
			</div>
	 
			<div class="form-group">
				<button id="submit" style="cursor:pointer" type="submit" class="btn btn-primary">Sign Up</button>
			</div>
		</div>
	</form>
@endsection
​