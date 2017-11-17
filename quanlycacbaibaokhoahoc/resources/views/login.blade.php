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
	
<div class="page-header text-center">
	<h3>Login</h3>
</div>

	<form action="login" method="post" class="form-horizontal">
		<input type="hidden" name="_token" value="{{csrf_token()}}" \>
		<!--Input User name -->
		  <div class="form-group">
		    <label class="control-label col-sm-2 col-sm-offset-3" for="user_name">User name:</label>
		    <div class="col-sm-4">
		      <input type="text" class="form-control" name="username" value="{{old('username')}}" id="user_name" placeholder="Use name">
		    </div>
		  </div><!-- Kết thúc User name -->
		@foreach($errors->get('username') as $loi)
			<div class="col-sm-4  col-sm-offset-5">
				<span style="color: red;margin-left: 10px">{{$loi}}</span>
			</div>
		@endforeach

		<div class="clearfix"></div>
		<br>

		<!--Input Password -->
		  <div class="form-group">
		    <label class="control-label col-sm-2 col-sm-offset-3" for="pwd">Password:</label>
		    <div class="col-sm-4"> 
		      <input type="password" class="form-control" name="password" id="pwd" placeholder="Password">
		    </div>
		  </div>
		@foreach($errors->get('password') as $loi)
			<div class="col-sm-4  col-sm-offset-5">
				<span style="color: red;margin-left: 10px">{{$loi}}</span>
			</div>
		@endforeach<!-- Kết thúc input password -->
		@if(session('thongbao'))
			<div class="col-sm-4  col-sm-offset-5">
				<span style="color: red;margin-left: 10px">{{session('thongbao')}}</span>
			</div>
		@endif
		<div class="clearfix"></div>
		<br>
		  <!-- <div class="form-group"> 
		    <div class="col-sm-offset-2 col-sm-10">
		      <div class="checkbox">
		        <label><input type="checkbox"> Remember me</label>
		      </div>
		    </div>
		  </div> -->
		  <div class="form-group"> 
		    <div class="col-sm-offset-6 col-sm-6">
		      <button type="submit" class="btn btn-primary">Login</button>
		    </div>
		  </div>
</form>

</body>
</html>