<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<title>Add data</title>
	<title>Change password</title>
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

	<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

	<!-- Latest compiled JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<link rel="stylesheet" type="text/css" href="css/style_add_data.css">
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
				<a class="navbar-brand" style="font-weight: normal; font-size: 100%" href="#">Paper</a>
			</div>

			<!-- Collect the nav links, forms, and other content for toggling -->
			<div class="collapse navbar-collapse navbar-ex1-collapse">
				<ul class="nav navbar-nav">
					<li>
						<a href="#">Add data</a>
					</li>
					<!-- <li><a href="#">Link</a></li> -->
				</ul>

				<ul class="nav navbar-nav navbar-right">
					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown">User
							<b class="caret"></b>
						</a>
						<ul class="dropdown-menu">
							<li>
								<a href="#">Change user name and password</a>
							</li>
							<div class="divider"></div>
							<li>
								<a href="#">Logout 2</a>
							</li>


						</ul>
					</li>
				</ul>
			</div>
			<!-- /.navbar-collapse -->
		</div>
	</nav>
	<!-- Kết thúc navbar -->

	<div class="container">
		<div class="huong-dan">
			<p class="text-justify">
				<h3>Tải lên các file .csv với định dạng như sau:</h3>
				<table class='guild_table'>
					<tr>
						<th>STT</th>
						<th>Tên file</th>
						<th>Định dạng</th>
						<th>Mô tả</th>
					</tr>
					<tr>
						<td>1</td>
						<td>paper.csv</td>
						<td>"id", “title”, “yyyy-mm-dd”, “url”, “issn”, “keywords”, “abstract”, “authors”
						</td>
						<td>lưu dữ liệu của các bài báo. Trường url là bắt buộc.</td>
					</tr>
					<tr>
						<td>2</td>
						<td>author.csv</td>
						<td>"id", “givenName”, “surname”, “email”, “url”</td>
						<td>lưu dữ liệu các tác giả. Trường url là bắt buộc.</td>
					</tr>
					<tr>
						<td>3</td>
						<td>author_paper.csv</td>
						<td>"id paper", "id author"</td>
						<td>lưu liên kế giữa các bài báo và tác giả</td>
					</tr>
					<tr>
						<td>4</td>
						<td>subject.csv</td>
						<td>id, “subject”</td>
						<td>dữ liệu các chủ đề của các tác giả được thêm vào</td>
					</tr>
					<tr>
						<td>5</td>
						<td>author_subject.csv</td>
						<td>"id author", id subject</td>
						<td>liên kết giữa các tác giả và chủ đề</td>
					</tr>
					<tr>
						<td>6</td>
						<td>institute.csv</td>
						<td>id, city_id, “name”</td>
						<td>lưu tên các trường đại học/viện nghiên cứu</td>
					</tr>
					<tr>
						<td>7</td>
						<td>author_institue</td>
						<td>"author_id", institute_id</td>
						<td>liên kết giữa tác giả và cơ quan</td>
					</tr>
					<tr>
						<td>8</td>
						<td>city_state.csv</td>
						<td>id, country_id, “name”</td>
						<td>lưu các thành phố hoặc bang</td>
					</tr>
					<tr>
						<td>9</td>
						<td>country.csv</td>
						<td>id, “name”</td>
						<td>lưu tên các quốc gia</td>
					</tr>
				</table>
			</p>

		</div>
		@if ($error_message)
			@foreach($error_message as $err)
				<div class='alert alert-warning'>
					{{$err}}
				</div>
			@endforeach
		@elseif ($success_message)
		<div class='alert alert-success'>
			{{$success_message}}
		</div>
		@endif 
		{!! Form::open(['url' => '/addData', 'files' => true]) !!}
		<div class="row import-file">

			<div class="col-xs-8 col-sm-8 col-md-8 col-lg-8 col-xs-offset-2 col-sm-offset-2 
				col-md-offset-2 col-lg-offset-2" style='width:100%; margin: auto'>
				<div class="">

					<!--Hàng paper-->
					<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
						<p>File paper.csv</p>
					</div>
					<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
						<input id="file1" type='file' name='paper' required class='inputfile'>
						<label for="file1">Choose a file</label>
					</div>
					<!--kết thúc hàng paper-->


					<!--Hàng author-->
					<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 margin-top">
						<p>File author.csv</p>
					</div>
					<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 margin-top">
						<input id="file2" type='file' name='author' required class='inputfile'>
						<label for="file2">Choose a file</label>
					</div>
					<!--Kết thúc hàng author-->

					<!--Hamg author_paper-->
					<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 margin-top">
						<p>File author_paper.csv</p>
					</div>
					<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 margin-top">
						<input id="file3" type='file' name='author_paper' required class='inputfile'>
						<label for="file3">Choose a file</label>
					</div>
					<!--Kết thúc hàng author_paper-->

					<!--Hàng subject-->
					<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 margin-top">
						<p>File subject.csv</p>
					</div>
					<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 margin-top">
						<input id="file4" type='file' name='subject' required class='inputfile'>
						<label for="file4">Choose a file</label>
					</div>
					<!--Kết thúc hàng subject-->

					<!--Hàng author_subject-->
					<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 margin-top">
						<p>File author_subject.csv</p>
					</div>
					<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 margin-top">
						<input id="file5" type='file' name='author_subject' required class='inputfile'>
						<label for="file5">Choose a file</label>
					</div>
					<!--Kết thúc hàng author_subject-->

					<!--Hàng institute-->
					<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 margin-top">
						<p>File institute.csv</p>
					</div>
					<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 margin-top">
						<input id="file6" type='file' name='institute' required class='inputfile'>
						<label for="file6">Choose a file</label>
					</div>
					<!--Kết thúc hàng institute-->

					<!--Hàng author_institute-->
					<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 margin-top">
						<p>File author_institute.csv</p>
					</div>
					<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 margin-top">
						<input id="file7" type='file' name='author_institute' required class='inputfile'>
						<label for="file7">Choose a file</label>
					</div>
					<!--Kết thúc hàng author_institute-->

					<!--Hàng city_state-->
					<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 margin-top">
						<p>File city_state.csv</p>
					</div>
					<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 margin-top">
						<input id="file8" type='file' name='city_state' required class='inputfile'>
						<label for="file8">Choose a file</label>
					</div>
					<!--Kết thúc hàng city_state-->

					<!--Hàng country-->
					<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 margin-top">
						<p>File country.csv</p>
					</div>
					<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 margin-top">
						<input id="file9" type='file' name='country' required class='inputfile'>
						<label for="file9">Choose a file</label>
					</div>

					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-sm-offset-3
						 margin-top margin_bottom  apply_button">
						<input type="submit" class="btn btn-primary btn_apply">
					</div>

				</div>
			</div>
		</div>
		{!! Form::close() !!}
	</div>
</body>
<script>
	var inputs = document.querySelectorAll('.inputfile');
	Array.prototype.forEach.call(inputs, function (input) {
		var label = input.nextElementSibling,
			labelVal = label.innerHTML;

		input.addEventListener('change', function (e) {
			var fileName = '';
			fileName = e.target.value.split('\\').pop();
			if (fileName.length > 15) {
				fileName = fileName.substring(0, 12) + '...';
			}
			label.innerHTML = fileName;
		});
	});
</script>

</html>