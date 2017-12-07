<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>注文完了</title>
</head>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" />
<link rel="stylesheet" type="text/css" href="{{ asset('css/input.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap.css') }}">

<body>
	<div class="jumbotron">
		<div class="container">
			<h1>客注業務</h1>
			<p>読みたい本を、あの書店に。</p>
		</div>
	</div>
	<div class="container">
		<div class="body_test">
			<p class="center">
				<label>ご注文が完了しました</label><br>
				<label>{{ $first_name }}</label>
				<button class="btn btn-outline-primary" type="button" onclick="location.href='kadai2.html'">検索トップへもどる</button>
			</p>
		</div>
	</div>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js"></script>
</body>
</html>