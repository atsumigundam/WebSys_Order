<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
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
				<div class="col-sm-6">
					<div class="card">
						<div class="row">
							<div class="col-md-8">
								<div class="card-block">
									<h4 class="card-title">書籍タイトル</h4>
									<p class="card-text">著者</p>
									<p class="card-text">出版社</p>
									<p class="card-text">出版日</p>
									<p class="card-text">書籍説明</p>
								</div>
							</div>
							<div class="col-md-4">
								<div class="card-img-bottom">
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-sm-6">
					<div class="card">
						<div class="card-block">
							<h4 class="card-title">{{ $shop_name }}</h4>
							<p class="card-text">{{ $shop_address }}</p>
							<p class="card-text">{{ $shop_phone }}</p>
							<div id="map_container">
								<div id="map"></div>
								<script type="text/javascript">
									function initMap() {
										var opts = {
											zoom: 15,
											center: new google.maps.LatLng(35.709984,139.810703)
										};
										var map = new google.maps.Map(document.getElementById("map"), opts);
									}
								</script>
								<script async defer
								src="https://maps.googleapis.com/maps/api/js?callback=initMap">
								</script>
							</div>
						</div>					
					</div>
				</div>
			</div>
			<div>
				<h3>購入者情報</h3>
				<form action="<?php echo $shop_id; ?>/confirm" method="post">
					{!! csrf_field() !!}
					<div class="form-group row">
						<label for="first_name" class="col-2 col-form-label">姓</label>
						<div class="col-10">
							<input class="form-control" type="text" name="first_name" id="first_name" placeholder="山田" value="山田">
						</div>
						@if ($errors->has('first_name'))
                    		<span class="help-block">
                        		<strong>{{ $errors->first('first_name') }}</strong>
                    		</span>
                		@endif
					</div>
					<div class="form-group row">
						<label for="last_name" class="col-2 col-form-label">名</label>
						<div class="col-10">
							<input class="form-control" type="text" name="last_name" id="last_name" placeholder="太郎" value="太郎">
						</div>
						@if ($errors->has('last_name'))
                    		<span class="help-block">
                        		<strong>{{ $errors->first('last_name') }}</strong>
                    		</span>
                		@endif
					</div>
					<div class="form-group row">
						<label for="tel" class="col-2 col-form-label">電話番号</label>
						<div class="col-10">
							<input class="form-control" type="tel" name="tel" id="tel" placeholder="000-0000-0000" value="00000000">
						</div>
						@if ($errors->has('tel'))
                    		<span class="help-block">
                        		<strong>{{ $errors->first('tel') }}</strong>
                    		</span>
                		@endif
					</div>
					<div class="form-group row">
						<label for="email" class="col-2 col-form-label">メールアドレス</label>
						<div class="col-10">
							<input class="form-control" type="email" name="email" id="email" placeholder="example@gmail.com" value="example@gmail.com">
						</div>
						@if ($errors->has('email'))
                    		<span class="help-block">
                        		<strong>{{ $errors->first('email') }}</strong>
                    		</span>
                		@endif
					</div>
					<p class="center">
						<button class="btn btn-outline-primary" type="submit">決定</button>
						<button class="btn btn-outline-primary" type="button">キャンセル</button>
					</p>
				</form>
			</div>
			
		</div>
	</div>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js"></script>
</body>
</html>