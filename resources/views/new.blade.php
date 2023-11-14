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
	</div>

	<form action="{{ route ('post') }}" method="post"> 
		@csrf
		<input type="text" name="tags" id="tags" placeholder="Тэги">
		<input type="text" name="text" id="text" placeholder="Ваш текст">
		<button type="submit" id="send">Опубликовать</button>
	</form>
</body>
</html>