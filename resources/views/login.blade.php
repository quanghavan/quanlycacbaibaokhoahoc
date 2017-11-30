<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Login</title>
	<base href="{{asset('')}}">
	<!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<link rel="stylesheet" type="text/css" href="css/style_login.css">
</head>
<body>
	
<div class="box_login">
	<h3 class='header color'>Login</h3>
	@if($error)
	<div class='alert alert-danger'>
		{{$error}}
	</div>
	@endif
	{!! Form::open(['url'=>'login']) !!}
		<div class='form-group'>
		<?php 
			echo Form::label('lb_user_name', 'User Name', array('for'=>'username', 'class'=>'color'));
			echo Form::text('name', '', array('class'=>'form-control', 'id'=>'username'));
			?>
		</div>
		<div class='form-group'>
		<?php
			echo Form::label('lb_pass', 'Pass word', array('for'=>'pass', 'class'=>'color'));
			echo Form::password('pass', array('class'=>'form-control', 'id'=>'pass'));
			echo Form::submit('Login', array('class'=>'btn btn-default button_submit'));
		?>
	{!! Form::close() !!}
</div>
</body>
</html>