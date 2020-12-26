<!DOCTYPE html>
<html>
<head>

	<title>index</title>
	<link rel="stylesheet" type="text/css" href={{ asset('css/app.css') }}>

	<style type="text/css">
		table, tr, td, th{
			border: solid 2px black;
			border-collapse: collapse;
			padding: 5px;
		}
	</style>
</head>
<body>
	<table class="alert-info">
		<tr>
			<th>#</th>
			<th>id</th>
			<th>title</th>
			<th>info</th>
			<th>img-name</th>
			<th>news_type_id</th>
			<th>action</th>
		</tr>
		<tr>
			@foreach ($data as $data)
				<tr>
					<td>{{++$loop->index}}</td>
					<td>{{$data->id}}</td>
					<td>{{$data->title}}</td>
					<td>{{$data->info}}</td>
					<td>{{$data->img_name}}</td>
					<td>{{$data->news_type_id}}</td>
					<td>

						<a href="{{ route('adminshow', ["id"=>$data->id]) }}">დათვალიერება</a>
						<form method="POST" action="{{ route('admindelete') }}">
							@csrf
							<input type="hidden" name="id" value="{{$data->id}}">
							<button>წაშლა</button>
						</form>
					
						

					</td>
				</tr>
			@endforeach
		</tr>
	</table>
	<br>
	<div class="container">
		<a href="{{ route('admincreate') }}" class="form-control">create news</a>
		<a href="{{ route('newstypeindex') }}" class="form-control">view news type</a>
		
	</div>



</body>
</html>

