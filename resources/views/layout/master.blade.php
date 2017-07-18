<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="{{ asset('css/css/bootstrap.min.css')}}">
	<title></title>
</head>
<body>
	<div class="container">
		
		<div>
		
		@yield("main_content")
		<!-- <form class="form-horizontal" method="POST" action='{{url("/home")}}'>
		{{csrf_field()}}
		<input type="text" name="name" class="form-control" placeholder="Name">
		<input type="text" name="description" class="form-control" placeholder="Description">
		<button type="submit" class="btn btn-success">Submit</button>
	</form> -->
		</div>		
	</div>

</body>
</html>
