<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Comfortaa&family=Playfair+Display&family=Work+Sans:wght@300&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="{{ asset('css/app.css') }}">
	<title>Интересные истории</title>
</head>
<body>
	<div class="header">
		<h3>Интересные истории</h3>
		<a href="{{ url('/admin') }}"><img src="User_alt_fill@3x.png"></a>
	</div>

	<div class="tags">
		<h5>Тэги</h5>
		<ul>
			@foreach($result as $data)
			<li><a href="{{ route ('tags', $data -> tags) }}">{{ $data->tags }}</a></li>
			@endforeach
		</ul>
	</div>
	@foreach($result as $data)
		<div class="story">
			<h5>{{$data -> tags}}</h5>
      		<p>{{$data -> text}}</p>
    	</div>
	@endforeach

	<div class="button-wrapper">
     	<a href="{{ route('new') }}"><button>Рассказать историю</button></a>
	</div>
	
</body>
</html>