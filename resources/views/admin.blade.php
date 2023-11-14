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
		<a href="{{route('main')}}"><h3>Интересные истории</h3></a>
		<a href="{{ url('/admin') }}"><img src="User_alt_fill@3x.png"></a>
	</div>

	<div class="tags">
		<h5>Тэги</h5>
		<ul>
			@foreach($published as $data)
			<li><a href="{{ route ('tags', $data -> tags) }}">{{ $data->tags }}</a></li>
			@endforeach
		</ul>
	</div>
	@foreach($published as $data)
		<div class="story">
			<h5>{{$data -> tags}}</h5>
      		<p>{{$data -> text}}</p>
      		<a href="{{ route ('delete', $data -> id)}}"><button>Удалить</button></a>
    	</div>
	@endforeach

	@foreach($wait as $data)
		<div class="story">
			<h5>{{$data -> tags}}</h5>
      		<p>{{$data -> text}}</p>
      		<a href="{{ route ('update', $data -> id)}} "><button>Опубликовать</button></a>
      		<a href="{{ route ('delete', $data -> id)}}"><button>Удалить</button></a>
    	</div>
	@endforeach

	<div class="button-wrapper">
     	<a href="{{ route('new') }}"><button>Рассказать историю</button></a>
	</div>
	
</body>
</html>