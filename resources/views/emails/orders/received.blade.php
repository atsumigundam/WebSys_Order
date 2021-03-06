<!DOCTYPE html>
<html>
<head>
	<title>注文受付完了</title>
</head>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" />
<link rel="stylesheet" href="{{ asset('css/mail_orderd.css') }}" />
<body>
	<div class="jumbotron">
		<div class="container">
			<h1>ご注文の確認</h1>
			<p>客注業務</p>
		</div>
	</div>
	<div class="container white box">
		<div class="center">
			<label>注文番号: {{ $order_id}} </label><br>
			<label>{{ $full_name }} 様</label><br>
			<label>{{ $book->name }}</label><br>
			<label>{{ $book->price }} 円(税抜)</label><br>
			<label>{{ $shop->name }}</label><br>
			<label>{{ $shop->address }}</label><br>
			<label>{{ $shop->phone }}</label>
		</div>
	</div>
	<div class="footer">
		<label>©Y書店 2017</label>
	</div>
</body>
</html>