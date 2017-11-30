<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Change password</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<link rel="stylesheet" type="text/css" href="../css/style_change_password.css">

</head>
<body>
        <nav class="navbar navbar-default background-nav" role="navigation">
        	<div class="container-fluid">
        		<!-- Brand and toggle get grouped for better mobile display -->
        		<div class="navbar-header">
        			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
        				<span class="sr-only">Toggle navigation</span>
        				<span class="icon-bar"></span>
        				<span class="icon-bar"></span>
        				<span class="icon-bar"></span>
        			</button>
        			<a class="navbar-brand" href="#">Paper</a>
        		</div>
        
        		<!-- Collect the nav links, forms, and other content for toggling -->
        		<div class="collapse navbar-collapse navbar-ex1-collapse">
        			<ul class="nav navbar-nav">
        				<li><a href="#">Add data</a></li>
        				<!-- <li><a href="#">Link</a></li> -->
        			</ul>
					<?php if((Auth::user())): ?>
        			<ul class="nav navbar-nav navbar-right">
        				<li class="dropdown">
        					<a href="#" class="dropdown-toggle" data-toggle="dropdown"><?php echo e(Auth::user()->username); ?><b class="caret"></b></a>
        					<ul class="dropdown-menu">
        						<li><a href="<?php echo e(route('logout')); ?>">Logout</a></li>
        					</ul>
        				</li>
        			</ul>
					<?php endif; ?>
        		</div><!-- /.navbar-collapse -->
        	</div>
        </nav>
        <div class="container">
        	<div class="row">
        		<div class="col-xs-6  col-sm-6  col-md-6  col-lg-6 col-xs-offset-3 col-sm-offset-3 col-md-offset-3 col-lg-offset-3 form">
        			<form action="" method="POST" role="form" class="form-horizontal">
						<input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>"/>
        				<legend class="text-center">Change Password</legend>
        			<div class="form-group">
        				<label class="control-label col-sm-4" for="username">New user name:</label>
					    <div class="col-sm-8">
					      <input type="text" class="form-control" name="username" value="<?php echo e(old('username')); ?>" id="username" placeholder="Enter user name">
					    </div>
					</div>
						<?php $__currentLoopData = $errors->get('username'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $loi): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
							<div class="col-sm-6  col-sm-offset-4">
								<span style="color: red;margin-left: 10px"><?php echo e($loi); ?></span>
							</div>
						<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
						<div class="clearfix"></div>
						<br>
					<div class="form-group">
					    <label class="control-label col-sm-4" for="password">New password:</label>
					    <div class="col-sm-8">
					      <input type="password" class="form-control" name="password" id="password" placeholder="Enter password">
					    </div>
					</div>
						<?php $__currentLoopData = $errors->get('password'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $loi): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
							<div class="col-sm-6  col-sm-offset-4">
								<span style="color: red;margin-left: 10px"><?php echo e($loi); ?></span>
							</div>
					<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><!-- Kết thúc input password -->
						<div class="clearfix"></div>
						<br>
					<div class="form-group">
					    <label class="control-label col-sm-4" for="confirm-password">Comfirm password:</label>
					    <div class="col-sm-8">
					      <input type="password" class="form-control" name="passwordAgain" id="confirm-password" placeholder="Comfirm password">
					    </div>
					</div>
						<?php $__currentLoopData = $errors->get('passwordAgain'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $loi): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
							<div class="col-sm-6  col-sm-offset-4">
								<span style="color: red;margin-left: 10px"><?php echo e($loi); ?></span>
							</div>
					<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><!-- Kết thúc input password -->
						<?php if(session('thongbao')): ?>
							<div class="col-sm-6  col-sm-offset-4">
								<span style="color: red;margin-left: 10px"><?php echo e(session('thongbao')); ?></span>
							</div>
						<?php endif; ?>
						<div class="clearfix"></div>
						<br>
        				<div class="text-center">
        					<button type="submit" class="btn btn-default text-center">Apply</button>
        				</div>
        			</form>
        		</div>
        	</div>
        </div>
</body>
</html>