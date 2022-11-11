<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="/public/css/style.css">
</head>
<body>
	<div>
		<ul>
			<li>
				<a href="http://href1">text1</a>
			</li>
		</ul>
	</div>
	<div>
		<ul>
			<li>
				<a href="http://href2">text2</a>
			</li>
		</ul>
	</div>
	<div>
		<ul>
			<li>
				<a href="http://href3">text3</a>
			</li>
		</ul>
	</div>
	<table>
		<tr>
			<th>№</th>
			<th>Имя</th>
			<th>Фамилия</th>
			<th>Забаненные</th>
		</tr>

		@foreach($ovanes as $bibon=>$key)
		@if($ovanes[$bibon]['banned']==true)
		<tr>
			<td>{{ $bibon+1 }}</td>
			<td>{{ $ovanes[$bibon]['name'] }}</td>
			<td>{{ $ovanes[$bibon]['surname'] }}</td>
			<td class="bars">Забанен</td>
		</tr>
		@else($ovanes[$bibon]['banned']==false)
		<tr>
			<td>{{ $bibon+1 }}</td>
			<td>{{ $ovanes[$bibon]['name'] }}</td>
			<td>{{ $ovanes[$bibon]['surname'] }}</td>
			<td class="bors">Активен</td>

		</tr>
		@endif
		@endforeach

	</table>

</body>
</html>