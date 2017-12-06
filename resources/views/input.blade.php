<!DOCTYPE html>
<html>
<head>
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
							<h4 class="card-title"><?= $shop_name ?></h4>
							<p class="card-text"><?= $shop_address ?></p>
							<p class="card-text"><?= $shop_phone ?></p>
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
				<form>
					<div class="form-group row">
						<label for="first-name" class="col-2 col-form-label">姓</label>
						<div class="col-10">
							<input class="form-control" type="text" name="first-name" id="first-name" placeholder="山田">
						</div>
					</div>
					<div class="form-group row">
						<label for="last-name" class="col-2 col-form-label">名</label>
						<div class="col-10">
							<input class="form-control" type="text" name="last-name" id="last-name" placeholder="太郎">
						</div>
					</div>
					<div class="form-group row">
						<label for="tel" class="col-2 col-form-label">電話番号</label>
						<div class="col-10">
							<input class="form-control" type="tel" name="tel" id="tel" placeholder="000-0000-0000">
						</div>
					</div>
					<div class="form-group row">
						<label for="email" class="col-2 col-form-label">メールアドレス</label>
						<div class="col-10">
							<input class="form-control" type="email" name="email" id="email" placeholder="example@gmail.com">
						</div>
					</div>
				</form>
			</div>
			<p class="center">
				<button class="btn btn-outline-primary" type="button" onclick="location.href='confirm.html'">決定</button>
				<button class="btn btn-outline-primary" type="button" onclick="location.href='kadai4.html'">キャンセル</button>
			</p>
		</div>
	</div>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js"></script>
</body>
</html>