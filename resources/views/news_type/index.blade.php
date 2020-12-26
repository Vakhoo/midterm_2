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
			<th>news_type</th>
			<th>action</th>
		</tr>
		<tr>
			@foreach ($data as $data)
				<tr>
					<td>{{++$loop->index}}</td>
					<td>{{$data->id}}</td>
					<td>{{$data->news_type}}</td>
					<td>

						<a href="{{ route('newstypeshow', ["id"=>$data->id]) }}">დათვალიერება</a>
						<form method="POST" action="{{ route('newstypedelete') }}">
							@csrf
							<input type="hidden" name="id" value="{{$data->id}}">
							<button>წაშლა</button>
						</form>

					</td>
				</tr>
			@endforeach
		</tr>
	</table>

	<div class="container">
		<a href="{{ route('newstypecreate') }}" class="form-control">create news type</a>
		<a href="{{ route('adminindex') }}" class="form-control">view news</a>
		
	</div>


</body>
</html>

