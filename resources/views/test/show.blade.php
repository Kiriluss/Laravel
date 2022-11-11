<!DOCTYPE html>
<html>
	<head>
		<title>
		@yield('title')
		</title>
	</head>
	<body>
		<header>
			хедер
		</header>
		<aside>
			сайдбар
			@yield('aside')

		</aside>
		<main>
			@yield('main')
		</main>
		<footer>
			футер
		</footer>
	</body>
</html>
