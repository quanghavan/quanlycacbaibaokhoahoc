<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<base href="<?php echo e(asset('')); ?>">
	<title>Search Papers</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<link rel="stylesheet" type="text/css" href="css/style_search_paper.css">
</head>
<body>

<!-- Bắt đầu navbar -->
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
    						<li><a href="<?php echo e(route('changeUserPass',['id'=> Auth::user()->id])); ?>">Change user name and password</a></li>
    						<div class="divider"></div>
    						<li><a href="<?php echo e(route('logout')); ?>">Logout</a></li>
    					</ul>
    				</li>
    			</ul>
				<?php endif; ?>
    		</div><!-- /.navbar-collapse -->
    	</div>
 </nav> <!-- Kết thúc navbar -->

<div class="page-header text-center">
	<h2>SEARCH PAPER</h2>
</div>

<div class="box-search container">
	<div class="col-sm-6 col-sm-offset-3">
		<form action="search" method="get">
			<div class="input-group">
				<input type="text" class="form-control" placeholder="Search" id="word" name="word">
			    <div class="dropdown input-group-btn">
				    <button class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
  					  <span class="caret"></span>
  					</button>

					<ul class="dropdown-menu">
						<div class="form-search">
							<form class="form-horizontal">
						    <div class="form-group margin-top" >
						      <label class="control-label col-sm-3" >Author:</label>
						      <div class="col-sm-9" >
						        <input type="text" class="form-control" id="author"  name="author">
						      </div>
						    </div>

						    <div class="form-group margin-top">
						      <label class="control-label col-sm-3" >Keywords:</label>
						      <div class="col-sm-9">
						        <input type="text" class="form-control" id="keywords" name="keywords">
						      </div>
						    </div>

						    <div class="form-group margin-top">
						      <label class="control-label col-sm-3" >Institute:</label>
						      <div class="col-sm-9">
						        <input type="text" class="form-control" id="institute" name="institute">
						      </div>
						    </div>

						    <div class="form-group margin-top">
						      <label class="control-label col-sm-3" >City/State:</label>
						      <div class="col-sm-9">
						        <input type="text" class="form-control" id="city_state" name="city_state">
						      </div>
						    </div>


						    <div class="form-group">
						      <label class="control-label col-sm-3" >Country:</label>
						      <div class="col-sm-9">
						        <input type="text" class="form-control" id="country" name="country">
						      </div>
						    </div>

                <div class="form-group">
                  <div class="col-sm-9">
                    <input type="text" class="form-control" id="fulltext_search" name="fulltext_search" style="display: none">
                  </div>
                </div>
							</form>
						</div>
					</ul><!-- dropdown-menu -->

				</div><!-- /.dropdown -->
			    <div class="input-group-btn">
			      <button id ="search" class="btn btn-default" type="submit">
			        <i class="glyphicon glyphicon-search"></i>
			      </button>
			    </div>
			</div>
		</form>
	</div>
</div>

<hr>
<?php if(isset($paper)): ?>
	<?php if(count($paper)>0): ?>
    <div class="container">
    	<?php $__currentLoopData = $paper; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
      	<div class="ket-qua-1">
      		<h3 class="title"><a href="<?php echo e($row->uurl); ?>" target="_blank"><?php echo e($row->title); ?></a></h3>
      		<p class="author"><a href="<?php echo e($row->aurl); ?>" target="_blank"><?php echo e($row->surname); ?> <?php echo e($row->givenName); ?></a></p>
      		<div>
      			<span class="issn"><?php echo e($row->issn); ?></span>
      			<span class="cover"><?php echo e($row->coverDate); ?></span>
      		</div>
      		<div class="content text-justify">
      		<?php echo $row->abstract; ?>

      		</div>
      	</div>
      	<hr>
      	<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
      	<center>
      		<?php echo e($paper->links()); ?>

      	</center>
      </div>
	<?php else: ?>
		<div class="container">
			<h3>Không tìm thấy kết quả với các từ khóa trên</h3>
		</div>
	<?php endif; ?>
 <?php endif; ?>
</body>
</html>
<script type="text/javascript">
  $("#search").click(function(e){
    var author = $("#author").val();
    var keywords = $("#keywords").val();
    var institute = $("#institute").val();
    var city_state = $("#city_state").val();
    var country = $("#country").val();
    is_blank = !author && !keywords && !institute && !city_state && !country;
    if(is_blank){
      $("#fulltext_search").val("true");
    } else {
      $("#fulltext_search").val("false");
    }
  })

</script>
