<!DOCTYPE html>
<html>
<head>
	<title>edit</title>
	<link rel="stylesheet" type="text/css" href={{ asset('css/app.css') }}>
</head>
<body>
		<div class="container">
			<form action="{{ route('newstypeupdate') }}" method="POST">
				@csrf
				<input type="hidden" name="id" value="{{$data->id}}">
				<label>news type:</label>
				<input type="text" name="news_type" class="form-control" value="{{$data->news_type}}">
				<button class="btn btn-primary w-100" >save</button>
			</form>
		</div>

</body>
</html>

