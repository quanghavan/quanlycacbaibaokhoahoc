<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>List</title>
    <base href="{{asset('')}}">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<link rel="stylesheet" type="text/css" href="css/style_list.css">

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
        			
        			<ul class="nav navbar-nav navbar-right">
        				<li class="dropdown">
        					<a href="#" class="dropdown-toggle" data-toggle="dropdown">{{ $user->username}} <b class="caret"></b></a>
        					<ul class="dropdown-menu">
        						<li><a href="{{$user->id}}">Change user name and password</a></li>
        						<div class="divider"></div>
        						<li><a href="#">Logout 2</a></li>
        						<div class="divider"></div>
        						<li><a href="#">Action 3</a></li>

        					</ul>
        				</li>
        			</ul>
        		</div><!-- /.navbar-collapse -->
        	</div>
        </nav>
        <div class="container">
            <div class="row">
                <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
                    <form >
                      <div class="form-group">
                        <select class="form-control" id="sel1">
                            <option>Papers</option>
                            <option>Authors</option>
                      </select>
                      </div>
                  </form>
                </div>

                <div class="col-xs-1 col-sm-1 col-md-1 col-lg-1 text-right">
                    <form >
                      <div class="form-group">
                        <label>From:</label>
                      </div>
                  </form>
              </div>

              <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
                   <form>
                      <div class="form-group">
                         <select class="form-control" id="sel2" >
                            <option>Author</option>
                            <option>Institute</option>
                            <option>City/State</option>
                            <option>Country</option>
                      </select>
                      </div>
                  </form>
              </div>

                <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
                    <form>
                      <div class="form-group">
                        <input type="text" class="form-control" id="search">
                      </div>
                  </form>
                </div>
                
                      
                      
                      <button type="submit" class="btn btn-default">OK</button>
                </form>
            </div>

            <div class="row">
                <h3>Title 1</h3>
                <p>Information </p>
            </div>
            <hr>
            <div class="row">
                <h3>Title 1</h3>
                <p>Information </p>
            </div>
            <hr>
            <div class="row">
                <h3>Title 1</h3>
                <p>Information </p>
            </div>
            <hr>
            <div class="row">
                <h3>Title 1</h3>
                <p>Information </p>
            </div>
            <hr>




    </div>
</body>
</html>