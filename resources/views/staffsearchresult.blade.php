<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width,initial-scale=1">
	<title>お客様登録</title>
</head>
<link rel="stylesheet" href="{{ asset('/css/staffdevice.css') }}"  type="text/css">
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
			<div class="col-sm-7 offset-sm-3">
				<label>「{{$searchwords}}」の検索結果</label>
				{{var_dump($searchwords)}}
			</div>
			@foreach ($books->chunk(4) as $chunk)
			<div class="row">
				@foreach ($chunk as $book)
				<div class="card col-md-3 shadow">
					<img class="card-img-top contain" src="{{ asset($book->cover) }}">
					<div class="card-block">
						<h4 class="card-title">{{ $book->name }}</h4>
						<p class="card-text">{{ $book->price }}円(税抜)</p>
					</div>
					<a href="{{ url('/stocks', $book->ISBN) }}"></a>
				</div>
				@endforeach
			</div>
			@endforeach
			<div class="pagination row">
				{{ $books->appends(['searchwords' => $searchwords])->links() }}
			</div>
			<div>
			</div>
		</div>
		
	</div>
</div>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/js/bootstrap.min.js" integrity="sha384-a5N7Y/aK3qNeh15eJKGWxsqtnX/wWdSZSKp+81YjTmS15nvnvxKHuzaWwXHDli+4" crossorigin="anonymous"></script>
</body>
</html>