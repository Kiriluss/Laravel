<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>HUANANA</title>
</head>
<body>
	@if(isset($email))
	<form action="" method="get">
		<input type="text" name="email">
		<input type="submit">
	</form>
	@else
	<p>У вас ошибка</p>
	@endif
</body>
</html>