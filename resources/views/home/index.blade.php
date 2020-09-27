<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>{{ $title }}</title>
	<link rel="stylesheet" href="">
</head>
<body>
	<div>{{ $bodyHomePage }}</div>
	<div>@foreach ($listSoChan as $soChan)
		{!! $soChan . '<br>' !!}
	@endforeach</div>
</body>
</html>
