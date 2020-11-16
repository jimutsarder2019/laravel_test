<html>
    <head>
        <title>App Name - @yield('title')</title>
		<script type="text/javascript" src="{{ URL::asset('js/jquery.js') }}"></script>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
		<script type="text/javascript" src="{{ URL::asset('js/custom.js') }}"></script>
		<style>
			body {
				font-family: "Helvetica Neue", Helvetica, Arial;	
			}

			.container {
				width: 90%;
				margin: 0 auto;
			}

			#signup {
				padding: 12px 25px 25px;
				background: #fff;
				box-shadow: 
					0px 0px 0px 5px rgba( 255,255,255,0.4 ), 
					0px 4px 20px rgba( 0,0,0,0.33 );
				-moz-border-radius: 5px;
				-webkit-border-radius: 5px;
				border-radius: 5px;
				display: table;
				position: static;
			}

			#signup .header-area {
				margin-bottom: 20px;
			}

			#signup .header-area h3 {
				color: #333333;
				font-size: 24px;
				font-weight: bold;
				margin-bottom: 5px;
			}

			#signup .header-area p {
				color: #8f8f8f;
				font-size: 14px;
				font-weight: 300;
			}

			#signup .sep {
				height: 1px;
				background: #e8e8e8;
				width: 406px;
				margin: 0px -25px;
			}

			#signup .inputs {
				margin-top: 25px;
			}

			#signup .inputs label {
				color: #8f8f8f;
				font-size: 12px;
				font-weight: 300;
				letter-spacing: 1px;
				margin-bottom: 7px;
				display: block;
			}

			input::-webkit-input-placeholder {
				color:    #b5b5b5;
			}

			input:-moz-placeholder {
				color:    #b5b5b5;
			}

			#signup .inputs input[type=text], input[type=email], input[type=password] {
				background: #f5f5f5;
				font-size: 0.8rem;
				-moz-border-radius: 3px;
				-webkit-border-radius: 3px;
				border-radius: 3px;
				border: none;
				padding: 13px 10px;
				width: 330px;
				margin-bottom: 20px;
				box-shadow: inset 0px 2px 3px rgba( 0,0,0,0.1 );
				clear: both;
			}

			#signup .inputs input[type=email]:focus, input[type=password]:focus {
				background: #fff;
				box-shadow: 0px 0px 0px 3px #fff38e, inset 0px 2px 3px rgba( 0,0,0,0.2 ), 0px 5px 5px rgba( 0,0,0,0.15 );
				outline: none;   
			}

			#signup .inputs .checkboxy {
				display: block;
				position: static;
				height: 25px;
				margin-top: 10px;
				clear: both;
			}

			#signup .inputs input[type=checkbox] {
				float: left;
				margin-right: 10px;
				margin-top: 3px;
			}

			#signup .inputs label.terms {
				float: left;
				font-size: 14px;
				font-style: italic;
			}

			#signup .inputs #submit {
				width: 100%;
				margin-top: 20px;
				padding: 15px 0;
				color: #fff;
				font-size: 14px;
				font-weight: 500;
				letter-spacing: 1px;
				text-align: center;
				text-decoration: none;
					background: -moz-linear-gradient(
					top,
					#b9c5dd 0%,
					#a4b0cb);
				background: -webkit-gradient(
					linear, left top, left bottom, 
					from(#b9c5dd),
					to(#a4b0cb));
				-moz-border-radius: 5px;
				-webkit-border-radius: 5px;
				border-radius: 5px;
				border: 1px solid #737b8d;
				-moz-box-shadow:
					0px 5px 5px rgba(000,000,000,0.1),
					inset 0px 1px 0px rgba(255,255,255,0.5);
				-webkit-box-shadow:
					0px 5px 5px rgba(000,000,000,0.1),
					inset 0px 1px 0px rgba(255,255,255,0.5);
				box-shadow:
					0px 5px 5px rgba(000,000,000,0.1),
					inset 0px 1px 0px rgba(255,255,255,0.5);
				text-shadow:
					0px 1px 3px rgba(000,000,000,0.3),
					0px 0px 0px rgba(255,255,255,0);
				display: table;
				position: static;
				clear: both;
			}

			#signup .inputs #submit:hover {
				background: -moz-linear-gradient(
					top,
					#a4b0cb 0%,
					#b9c5dd);
				background: -webkit-gradient(
					linear, left top, left bottom, 
					from(#a4b0cb),
					to(#b9c5dd));
			}
			
			.error{
				color: red;
			}
			</style>
			
			
			<style>
			* {box-sizing: border-box;}

			body { 
			  margin: 0;
			  font-family: Arial, Helvetica, sans-serif;
			}

			.header {
			  overflow: hidden;
			  background-color: #f1f1f1;
			  padding: 2px 10px;
			}

			.header a {
			  float: left;
			  color: black;
			  text-align: center;
			  padding: 12px;
			  text-decoration: none;
			  font-size: 18px; 
			  line-height: 25px;
			  border-radius: 4px;
			}

			.header a.logo {
			  font-size: 25px;
			  font-weight: bold;
			}

			.header a:hover {
			  background-color: #ddd;
			  color: black;
			}

			.header a.active {
			  background-color: dodgerblue;
			  color: white;
			}

			.header-right {
			  float: right;
			}

			@media screen and (max-width: 500px) {
			  .header a {
				float: none;
				display: block;
				text-align: left;
			  }
			  
			  .header-right {
				float: none;
			  }
			}
			</style>
			
			<style>
			#customers {
			  font-family: Arial, Helvetica, sans-serif;
			  border-collapse: collapse;
			  width: 100%;
			}

			#customers td, #customers th {
			  border: 1px solid #ddd;
			  padding: 8px;
			}

			#customers tr:nth-child(even){background-color: #f2f2f2;}

			#customers tr:hover {background-color: #ddd;}

			#customers th {
			  padding-top: 12px;
			  padding-bottom: 12px;
			  text-align: left;
			  background-color: lightslategrey;
			  color: white;
			}
			</style>
			<meta name="csrf-token" content="{{ csrf_token() }}" />
    </head>
    <div class="header">
	  <a href="/" class="logo">Admin Panel - ProfileBook</a>
	  <div class="header-right">
		<a class="active" href="/">Home</a>
		@if( auth()->check() )
			<a class="nav-link font-weight-bold" href="/admin-dashboard">User Dashboard</a>
			<a class="nav-link font-weight-bold" href="/user-list">User List</a>
			<a class="nav-link font-weight-bold" href="javascript:void(0)">{{ auth()->user()->name }}</a>
			<a class="nav-link" href="/logout">Log Out</a>
		@endif
	  </div>
	</div>

	<div class="container">
	    </br>
		@yield('content')
	</div>
</html>

