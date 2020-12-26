@extends('layouts.mainpage')
<!DOCTYPE html>
<html>
<head>

	<title>article</title>
	
</head>
<body>

	@section('content')
		<a href="https://www.etaloni.ge/geo/main/index/3">სიახლეები</a><br>
<br>


<div class="inner_text" id="inte" style="font-size:14px;">
<div class="inner_image"><img src="{{ asset("gallery/$data->img_name.jpg") }}" alt="" class="img-responsive"></div>
<div class="inner_title">{{$data->title}}</div>
	


<div style="float: left; padding: 0px 10px 0px 0px;">
	<div class="inner_date">{{$data->updated_at}}</div>
</div>
<div style="float: left; padding: 0px 10px 0px 0px;">
	<a href="https://www.facebook.com/sharer/sharer.php?app_id=1056907227702888&amp;kid_directed_site=0&amp;sdk=joey&amp;u=https%3A%2F%2Fwww.etaloni.ge%2Fgeo%2Fmain%2Findex%2F46663&amp;display=popup&amp;ref=plugin&amp;src=share_button" target="_blank"><img src="./9 რეგიონში სასწავლო წლის ბოლომდე დისტანციურად ისწავლიან_ - რა წერია განათლების მინისტრის ბრძანებაში, რომელიც საჯაროდ არ დევს - ეტალონი_files/share_new.png" alt=""></a>
</div>
<div style="float: left; padding: 0px 10px 0px 0px;">
	<input type="text" name="shortlink" id="shortlink" value="https://etaloni.ge/46663" class="shortlink" onclick="copyShortLink()">
	<div class="shortlink_done" id="sdone">დაკოპირებულია</div>
</div>
<div style="float: left;">
	<div class="fs_circle" onclick="changeFontSize(-1)">-</div>
	<div class="fs_symbol"></div>
	<div class="fs_circle" onclick="changeFontSize(1)">+</div>
</div>

	
<input type="text" name="shortlink2" id="shortlink2" value="https://www.etaloni.ge/geo/main/index/46663" class="shortlink2">



<br>
<br>

	<div><p>{{$data->info}}</p>
	<br><br><strong>მსგავსი სიახლეები:</strong>
	@foreach ($simular_news as $d)
		
		@if ($d->id==$data->news_type_id)

			@foreach ($d["news"] as $news)
				<p><a href="{{ route('customerid', ["id"=>$news->id]) }}" target="_blank" rel="noopener">{{$news->title}}</a></p><div class="clear"></div>
			@endforeach
		@endif
	@endforeach

	</div>
	</div>

	<div class="row">
	<div class="col-sm-12">
    	<br>
		<div class="inner_comments_num">კომენტარები</div>
        <div class="container" >
        	@foreach ($data["comments"] as $comm)
        		<p>{{$comm->user_name.": ".$comm->comment}}</p>
        	@endforeach

        	@guest
	        @else
		        <div class="container">
		        	<form  method="POST" action="{{ route('createcomment') }}">
		        		@csrf
			        	<input type="text" name="comment" class="form-control" style="width: 600px">
			        	<input type="hidden" name="user_name" value="{{Auth::user()->name}}">
			        	<input type="hidden" name="article_id" value="{{$data->id}}">
			        	<button class="btn btn-primary w-100">add</button>

	        		</form>
	        	</div>
	        @endguest
        </div>
		<br><br>
	</div>
	</div>
	@endsection

</body>
</html>

