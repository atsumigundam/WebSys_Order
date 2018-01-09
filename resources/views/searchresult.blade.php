<!DOCTYPE html>
<html>
<head>
	<title>検索結果</title>
</head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" />
<link rel="stylesheet" type="text/css" herf="{{ asset('css/list.css') }}">
<body>
	<div class="container">
		@foreach ($books->chunk(4) as $chunk)
		<div class="row">
			@foreach($chunk as $item)
			<div class="col-md-3">
				<div class="card card-block" >
					<img class="card-img-top" src="{{$item->cover }}" alt="Card image cap">
					<div class="card-block">
						<h4 class="card-title">{{ $item->name }}</h4>
						<p class="card-text">出版社:{{ $item->publisher }}　著者:{{ $item->author}} 出版日:{{ $item->date }} 値段:{{ $item->price }}</p>
						<a href="#" class="btn btn-primary">本の詳細へ</a>
					</div>
				</div>
			</div>
			@endforeach
		</div>
		@endforeach
		<div class="paginate"> 
			{{ $books->appends(['searchword' => $searchword])->links() }}
		</div>
	</div>
</body>
</html>