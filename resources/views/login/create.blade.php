@extends('layouts.main')

@section('title', 'Login')

@section('content')
	<form id="signup" method="POST" action="/login">
		<div class="header-area">
			<h3>Login</h3>  
		</div>
		<div class="sep"></div>

		<div class="inputs">
			{{ csrf_field() }}

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
			
			@if($errors->has('message'))
				<div class="error">{{ $errors->first('message') }}</div>
			@endif
	 
			<div class="form-group">
				<button id="submit" style="cursor:pointer" type="submit" class="btn btn-primary">Login</button>
			</div>
		</div>
	</form>
@endsection
​