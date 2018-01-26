<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width,initial-scale=1">
	<title>お客様登録</title>
</head>
<link rel="stylesheet" href="./staffdevice.css"  type="text/css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/css/bootstrap.min.css" integrity="sha384-Zug+QiDoJOrZ5t4lssLdxGhVrurbmBWopoEl+M6BdEfwnCJZtKxi1KgxUyJq13dy" crossorigin="anonymous">

<body>
	<div class="jumbotron">
		<div class="jumbocolor">
			<h1 class="display-3">店舗内本検索サービス</h1>
			<p class="lead">このページは本を検索するページです</p>
		</div>
	</div>
	<div class="container">
		<div class="row">
			<div class="form-control col-sm-8 offset-sm-2">
				<div class="row">
					<div class="col-sm-8 offset-sm-3">
						　　<label>年代　{{$age}}　　  性別　{{$sex}}</label>　
					</div>
				</div>
				<div style="text-align: center;">最近検索されているワード
				</div>
                <div class="row">
                	<div class="col-sm-12">
					<table class="table">
						<thead>
							<tr>
								<th scope="col">順位</th>
								<th scope="col">ワード</th>
								<th scope="col">回数</th>
								<th scope="col">検索</th>
							</tr>
						</thead>
						<tbody>
							<?php $count = 1 ?>
							@foreach ($result as $chunk)
							<tr>
								<th scope="row">{{$count++}}</th>
								<td>{{$chunk->searchwords}}</td>
								<td>{{$chunk->count}}</td>
							</tr>
							@endforeach
						</tbody>
					</table>
				</div>
					
				</div>
				<div class="row analysisresult">
					<div class="col-sm-9 offset-sm-2">
						<label>年代　20代　性別　男性　におすすめの本</label>
					</div>
				</div>
				<div class="row recommend">
					<div class="card col-sm-4">
						<img class="card-img-top contain" src="./img/bleach7.jpg">
						<h4 class="card-title">BLEACH7巻</h4>
						<p class="card-text">563円(税抜)</p>
					</div>
					<div class="card col-sm-4">
						<img class="card-img-top contain" src="./img/bleach6.jpg">
						<h4 class="card-title">BLEACH6巻</h4>
						<p class="card-text">563円(税抜)</p>
					</div>
					<div class="card col-sm-4">
						<img class="card-img-top contain" src="./img/bleach8.jpg">
						<h4 class="card-title">BLEACH8巻</h4>
						<p class="card-text">563円(税抜)</p>
					</div>
				</div>
				<div class="row search">
					<div class="col-sm-6 offset-sm-3">
						<input type="text" name="searchword" class="form-control">
						<button class="btn btn-secondary col-sm-2 offset-sm-5" onclick="location.href='staffdevicesearchresult.html'" type="submit">検索</button>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/js/bootstrap.min.js" integrity="sha384-a5N7Y/aK3qNeh15eJKGWxsqtnX/wWdSZSKp+81YjTmS15nvnvxKHuzaWwXHDli+4" crossorigin="anonymous"></script>
</body>
</html>