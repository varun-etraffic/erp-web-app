<!DOCTYPE>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('css/custom.css') }}">
	<title></title>
</head>
<body class="body">
<div class="container">
	<div class="logo">
		<img src="{{ url('upload/bigballoonlogo.png')}}">
	</div>
	<div class="qrcode-body text-center mt-5">
        {!! QrCode::size(250)->generate($OrderId) !!}
    </div>
</div>
</body>
</html>