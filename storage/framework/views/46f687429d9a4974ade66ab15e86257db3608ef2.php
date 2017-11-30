<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Login</title>
	<base href="<?php echo e(asset('')); ?>">
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
		<input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>" \>
		<!--Input User name -->
		  <div class="form-group">
		    <label class="control-label col-sm-2 col-sm-offset-3" for="user_name">User name:</label>
		    <div class="col-sm-4">
		      <input type="text" class="form-control" name="username" value="<?php echo e(old('username')); ?>" id="user_name" placeholder="Use name">
		    </div>
		  </div><!-- Kết thúc User name -->
		<?php $__currentLoopData = $errors->get('username'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $loi): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
			<div class="col-sm-4  col-sm-offset-5">
				<span style="color: red;margin-left: 10px"><?php echo e($loi); ?></span>
			</div>
		<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

		<div class="clearfix"></div>
		<br>

		<!--Input Password -->
		  <div class="form-group">
		    <label class="control-label col-sm-2 col-sm-offset-3" for="pwd">Password:</label>
		    <div class="col-sm-4"> 
		      <input type="password" class="form-control" name="password" id="pwd" placeholder="Password">
		    </div>
		  </div>
		<?php $__currentLoopData = $errors->get('password'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $loi): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
			<div class="col-sm-4  col-sm-offset-5">
				<span style="color: red;margin-left: 10px"><?php echo e($loi); ?></span>
			</div>
		<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><!-- Kết thúc input password -->
		<?php if(session('thongbao')): ?>
			<div class="col-sm-4  col-sm-offset-5">
				<span style="color: red;margin-left: 10px"><?php echo e(session('thongbao')); ?></span>
			</div>
		<?php endif; ?>
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