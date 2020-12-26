<!DOCTYPE html>
<html>
<head>
	<title>edit</title>
	<link rel="stylesheet" type="text/css" href={{ asset('css/app.css') }}>
</head>
<body>
		<div class="container">
			<form action="{{ route('adminupdate') }}" method="POST" enctype="multipart/form-data">
				@csrf
				<input type="hidden" name="id" value="{{$data->id}}">
				<label>title:</label>		
				<input type="text" class="form-control" name="title" value="{{$data->title}}">
				<label>info:</label>	
				<textarea class="form-control" name="info">{{$data->info}}</textarea>	
				<label>image name:</label>		
				<input type="text" class="form-control" name="img-name" value="{{$data->img_name}}">
				<label>image:</label>
				<input type="file" name="image" class="form-control">
				<label>news type id:</label>
				<input type="number" name="news_type_id" class="form-control" value="{{$data->news_type_id}}">
				
				<button class="btn btn-primary w-100">save</button>
			</form>
		</div>

</body>
</html>

