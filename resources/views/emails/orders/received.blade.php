<!DOCTYPE html>
<html>
<head>
	<title>注文受付完了</title>
</head>
<body>
	<label>ご注文の受付が完了いたしました。</label><br>
	<label>注文番号: {{ $order_id}} </label><br>
	<label>{{ $book->name }}</label><br>
	<label>{{ $book->price }} 円(税抜)</label><br>
	<label>{{ $shop->name }}</label><br>
	<label>{{ $shop->address }}</label><br>
	<label>{{ $shop->phone }}</label>
</body>
</html>