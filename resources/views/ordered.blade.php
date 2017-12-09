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
			<div class="center">
				<label>ご注文が完了しました</label>
				<p>
					<label>{{ $first_name }} {{ $last_name }} 様</label><br>
					<label>{{ $book_name}} {{ $book_price}} 円(税抜)</label><br>
					<label>{{ $shop_name }}</label><br>
					<a href="https://maps.google.com/maps?q=<?php echo $shop_address; ?>" target="_blank">{{ $shop_address }} Google Mapで見る</>
				</p>
				<button class="btn btn-outline-primary" type="button">検索トップへもどる</button>
			</div>
		</div>
	</div>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js"></script>
</body>
</html>