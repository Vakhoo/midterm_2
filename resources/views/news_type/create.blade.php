<!DOCTYPE html>
<html>
<head>
	<title>create</title>
	<link rel="stylesheet" type="text/css" href={{ asset('css/app.css') }}>
</head>
<body>
	<div class="container">
		<form action="{{ route('newstypestore') }}" method="POST" enctype="multipart/form-data">
			@csrf
			<label>news type:</label>		
			<input type="text" class="form-control" name="news_type">
			<button class="btn btn-primary w-100">save</button>
		</form>
	</div>

</body>
</html>