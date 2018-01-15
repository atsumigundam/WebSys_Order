<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>在庫詳細ページ</title>
</head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" />
<link rel="stylesheet" href="{{ asset('/css/stockdetail.css') }}">
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">


<body>
	<div class="jumbotron">
		<div class="jumbocolor">
			<h1 class="display-3">在庫一覧</h1>
			<p class="lead">選択された本の詳細情報をお届けします</p>
			<p class="lead">
				<a class="btn btn-outline-success" href="#" role="button">詳しくはこちら
				</a>
			</p>
		</div>
	</div>
	<div class="container bookcolor">
   <dic class ="bookdetail">
		<div class="row">
			<table class="table table-striped">
				<thead>
					<tr>
						<th>参考画像</th>
						<th>タイトル</th>
						<th>作者</th>
						<th>出版社</th>
						<th>発行年月</th>
						<th>定価</th>
						<th>ISBN</th>
					</tr>
				</thead>

				<tbody>
					<tr>
						<td><img src="{{ $cover }}"></td>
						<td>{{$book}}</td>
						<td>{{$author}}</td>
						<td>{{$publisher}}</td>
						<td>{{$date}}</td>
						<td>{{$price}}</td>
						<td>{{$ISBN}}</td>
					</tr>
				</tbody>

			</table>
		</div>
	</div>
	</div>

<div class="container shopcolor">
	<div class = "test2">
		<div class="row">
			<table class="table table-striped">
				<thead>
					<tr>
						<th>店舗</th>
						<th>在庫状況</th>
						<th>注文</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td>{{$shop1->name}}</td>
						<td>{{$zaiko1}}</td>
						<td>
							<form action="order/{{ $ISBN }}/{{ $shop1->id }}" method="get">
								<button type = "submit" class="btn btn-secondary">
									注文へ
								</button>
							</form>
						</td>
					</tr>
					<tr>
						<td>{{$shop2->name}}</td>
						<td>{{$zaiko2}}</td>
						<td>
							<form action="order/{{ $ISBN }}/{{ $shop2->id }}" method="get" >
								<button type ="submit" class="btn btn-secondary">
									注文へ
								</button>
							</form>
						</td>
					</tr>
					<tr>
						<td>{{$shop3->name}}</td>
						<td>{{$zaiko3}}</td>
						<td>
							<form action="order/{{ $ISBN }}/{{ $shop3->id }}" method="get" >
								<button type ="submit" class="btn btn-secondary">
									注文へ
								</button>
							</form>
						</td>
					</tr>
					<tr>
						<td>{{$shop4->name}}</td>
						<td>{{$zaiko4}}</td>
						<td>
							<form action="order/{{ $ISBN }}/{{ $shop4->id }}" method="get" >
								<button type= "submit" class="btn btn-secondary">
									注文へ
								</button>
							</form>
						</td>
					</tr>
				</tbody>
			</table>													
		</div>
	</div>
</div>

</body>
</html>

