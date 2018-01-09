<!DOCTYPE html>
<html>
<head>
	<title>ListTest</title>
</head>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" />
<link rel="stylesheet" type="text/css" href="{{ asset('css/list.css') }}">

<body>
	<div class="container">
		@foreach ($books->chunk(4) as $chunk)
		<div class="row">
			@foreach ($chunk as $book)
			<div class="card col-md-3 shadow">
				<img class="card-img-top contain" src="{{ asset($book->cover) }}">
				<div class="card-block">
					<h4 class="card-title">{{ $book->name }}</h4>
					<p class="card-text">{{ $book->price }}円(税抜)</p>
				</div>
				<a href="{{ url('/zaiko', $book->ISBN) }}"></a>
			</div>
			@endforeach
		</div>
		@endforeach
		<div class="paginate">
			{{ $books->appends(['searchword' => $searchword])->links() }}
		</div>
		<div>
			<form action="search" method="get">
				<button class="btn btn-secondary" type="submit">検索トップへもどる</button>
			</form>
		</div>
	</div>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js"></script>
</body>
</html>