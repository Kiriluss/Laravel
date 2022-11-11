<!DOCTYPE html>
<html>
	<head>
		<title>{{$post['title']}}</title>
	</head>
	<body>
		<header>
			<h1></h1>
		</header>
		<main>
			<div class="info">
				<span>{{$post['date']}}</span>
				<span class="author">{{$post['author']}}</span>
			</div>
			<div class="text">
				{{$post['text']}}
			</div>
		</main>
	</body>
</html>
