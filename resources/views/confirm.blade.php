<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width,initial-scale=1">
	<title>客注業務</title>
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
			<h3>書籍と店舗情報</h3>
			<div class="row">
				<div class="col-lg-6">
					<div class="card">
						<div class="row">
							<div class="col-md-8">
								<div class="card-block">
									<h4 class="card-title">{{ $book_name }}</h4>
									<p class="card-text">{{ $book_author }}</p>
									<p class="card-text">{{ $book_publisher }}</p>
									<p class="card-text">{{ $book_date }}</p>
									<p class="card-text">{{ $book_price }} 円(税抜)</p>
								</div>
							</div>
							<div class="col-md-4 card-img-bottom">
								<img src="{{ $book_cover }}" class="img-fluid">
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-6">
					<div class="card">
						<div class="card-block">
							<h4 class="card-title">{{ $shop_name }}</h4>
							<p class="card-text">{{ $shop_address }}</p>
							<p class="card-text">{{ $shop_phone }}</p>
							<div id="map_container">
								<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBcZUJ3nxz930z7lbmrLhdsQMpOk--M9bM">
								</script>
								<script type="text/javascript">
									var geocoder = new google.maps.Geocoder();//Geocode APIを使います。
									var address = {!! json_encode($shop_address) !!}
									geocoder.geocode({'address': address,'language':'ja'},function(results, status){
										if (status == google.maps.GeocoderStatus.OK){
											var latlng=results[0].geometry.location;//緯度と経度を取得
											var mapOpt = {
								          		center: latlng,//取得した緯度経度を地図の真ん中に設定
								          		zoom: 15,//地図倍率1～20
								          		mapTypeId: google.maps.MapTypeId.ROADMAP//普通の道路マップ
								          	};
								          	var map = new google.maps.Map(document.getElementById('map'),mapOpt);
											var marker = new google.maps.Marker({//住所のポイントにマーカーを立てる
												position: map.getCenter(),
												map: map
											});
										}else{
											alert("Geocode was not successful for the following reason: " + status);
										}
									});
								</script>
								<div id="map"></div>
							</div>
						</div>					
					</div>
				</div>
			</div>
			<div>
				<h3>購入者情報</h3>
				<form name="form" action="ordered" method="post">
					<a name="form"></a>
				{!! csrf_field() !!}
					<div class="form-group row">
						<label for="first_name" class="col-sm-2 col-form-label">姓</label>
						<label class="col-sm-10 col-form-label" name="first_name" id="first_name">{{ $first_name }}</label>
					</div>
					<div class="form-group row">
						<label for="last_name" class="col-sm-2 col-form-label">名</label>
						<label class="col-sm-10 col-form-label" name="last-name" id="last_name">{{ $last_name }}</label>
					</div>
					<div class="form-group row">
						<label for="t_id" class="col-sm-2 col-sm-form-label">Tカード番号</label>
						<label class="col-sm-10 col-form-label" name="t_id" id="t_id">{{ $t_id }}</label>
					</div>
					<div class="form-group row">
						<label for="tel" class="col-sm-2 col-sm-form-label">電話番号</label>
						<label class="col-sm-10 col-form-label" name="tel" id="tel">{{ $tel }}</label>
					</div>
					<div class="form-group row">
						<label for="email" class="col-sm-2 col-form-label">メールアドレス</label>
						<label class="col-sm-10 col-form-label" name="email" id="email">{{ $email }}</label>
					</div>
					<p class="center">
						<button class="btn btn-outline-primary" type="submit">決定</button>
						<button class="btn btn-outline-primary" type="submit" name="button" value="back">修正</button>
					</p>
				</form>
			</div>
		</div>
	</div>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js"></script>
</body>
</html>
