<!DOCTYPE html>
<html>
<head>
	<title>create</title>
	<link rel="stylesheet" type="text/css" href={{ asset('css/app.css') }}>
</head>
<body>
	<div class="container">
		<form action="{{ route('adminstore') }}" method="POST" enctype="multipart/form-data">
			@csrf
			<label>title:</label>		
			<input type="text" class="form-control" name="title">
			<label>info:</label>
			<textarea type="text" class="form-control" name="info"></textarea>
			<label>image name:</label>		
			<input type="text" class="form-control" name="img-name">
			<label>image:</label>
			<input type="file" name="image" class="form-control">
			<label>news type id:</label>
			<input type="number" name="news_type_id" class="form-control">
			<button class="btn btn-primary w-100">save</button>
		</form>
	</div>

</body>
</html>