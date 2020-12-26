
@extends('layouts.mainpage')
<!DOCTYPE html>
<html>
<head>

	<title>article</title>
	
</head>
<body>

	@section('content')
		<h4 >ძიება:</h4><br>
<br>


<div class="inner_text" id="inte" style="font-size:14px;">

<div style="float: left;">
	<div class="fs_circle" onclick="changeFontSize(-1)">-</div>
	<div class="fs_symbol"></div>
	<div class="fs_circle" onclick="changeFontSize(1)">+</div>
</div>

	
<input type="text" name="shortlink2" id="shortlink2" value="https://www.etaloni.ge/geo/main/index/46663" class="shortlink2">



<br>
<br>
		@foreach ($data as $data)
		<div><a href="{{ route('customerid', ['id'=>$data->id]) }}">{{$data->title}}</a>
		@endforeach
	
	</div>

	<div class="row">
	<div class="col-sm-12">
    	<br>

		<br><br>
	</div>
	</div>
	@endsection

</body>
</html>





