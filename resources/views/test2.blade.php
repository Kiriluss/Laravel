<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="/public/css/style.css">
</head>
<body>
	<ul>
		@foreach($ovanes as $key=> $arr)
		@if($arr==$DAA)
        <li class="bars">{{ $arr }}</li>
        @else
        <li >{{ $arr }}</li>
        @endif
        @endforeach
    </ul>
</body>
</html>