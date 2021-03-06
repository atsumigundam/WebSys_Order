<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width,initial-scale=1">
	<title>お客様登録</title>
</head>
<link rel="stylesheet" href="{{ asset('/css/staffdevice.css') }}" type="text/css">
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
						　　<label>年代　{{$age}}代　　  性別　{{$sex}}</label>　
					</div>
				</div>
				<div style="text-align: center;">最近検索されているワード 
				</div>
				<div class="row">
					<div class="col-sm-12">
						<form>
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
										<td>
											<button formaction="{{$sex}}/{{$chunk->searchwords}}" type="submit" class="btn btn-primary">検索</button>

										</td>
									</tr>
									@endforeach
								</tbody>
							</table>
						</form>
					</div>
				</div>
				<div style="text-align: center;">年代　{{$age}}代　　  性別　{{$sex}}が購入してる本
				</div>
				<div class="row">
					<div class="col-sm-12">
						<form>
							<table class="table">
								<thead>
									<tr>
										<th scope="col">順位</th>
										<th scope="col">回数</th>
										<th scope="col">本タイトル</th>
										<th scope="col">画像</th>
									</tr>

								</thead>
								<tbody>
									<?php $count = 1 ?>
									@foreach ($a as $chunks)
									<tr>
										<th scope="row">{{$count++}}</th>
										<td>{{$chunks->count}}</td>
										<td>{{$chunks->name}}</td>
										<td><img class="w-75 p-3" src = "{{$chunks->cover}}"></td>
									</tr>
									@endforeach
								</tbody>
							</table>
						</form>
					</div>
					
				</div>

				<div class="row search">
					<div class="col-sm-6 offset-sm-3">
						<form action="{{url('staffdevice/search')}}" method="get">
						<input type="text" name="searchwords" class="form-control">
						<button class="btn btn-secondary col-sm-2 offset-sm-5" type="submit">検索</button>
					</form>
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