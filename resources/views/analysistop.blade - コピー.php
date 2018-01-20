<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width,initial-scale=1 shrink-to-fit=no">
	<title>分析トップ</title>
</head>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/css/bootstrap.min.css" integrity="sha384-Zug+QiDoJOrZ5t4lssLdxGhVrurbmBWopoEl+M6BdEfwnCJZtKxi1KgxUyJq13dy" crossorigin="anonymous">
<link rel="stylesheet" type="text/css" href="{{ asset('css/about.css') }}">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css" />

<body>
	<nav class="navbar navbar-expand-md navbar-light bg-light">
		<button class="navbar-toggler hidden-lg-up navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>
		<a class="navbar-brand" href="#">Y書店</a>
		<div class="collapse navbar-collapse" id="navbarNav">
			<ul class="navbar-nav">
				<li class="nav-item">
					<a class="nav-link" href="{{ url('/searchlog') }}">検索ログ分析</span></a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="#">アクセスログ分析</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="#">購入ログ分析</a>
				</li>
			</ul>
		</div>
	</nav>
	<div class="content">
		<div class="box">
			<h1 class="wow fadeIn" data-wow-delay="0.5s">分析システム</h1>
			<h3 class="wow fadeIn" data-wow-delay="0.8s">在庫検索システムと連携し、高精度な分析を提供します。</h3>
		</div>
	</div>
	<div class="content n2">
		<div class="box">
			<h1 class="wow fadeIn" data-wow-delay="0.5s">あらゆる客層データを収集</h1>
			<h3 class="wow fadeIn" data-wow-delay="0.8s">ハイパワーな分析データベースは、わずかな需要も見逃しません。</h3>
		</div>
	</div>
	<div class="content n3">
		<div class="box">
			<h1 class="wow fadeIn" data-wow-delay="0.5s">洗練されたグラフシステム</h1>
			<h3 class="wow fadeIn" data-wow-delay="0.8s">高度なグラフ機能により、売上推移を瞬時に可視化します。</h3>
			<div class="row img">
				<div>
					<img src="{{ asset('css/img/about/g1.png') }}" class="wow fadeIn d-sm-none sm" data-wow-delay="1.0s">
				</div>
				<img src="{{ asset('css/img/about/g1.png') }}" class="wow fadeIn col-sm-4 d-none d-sm-block" data-wow-delay="1.0s">
				<img src="{{ asset('css/img/about/g2.png') }}" class="wow fadeIn col-sm-4 d-none d-sm-block" data-wow-delay="1.2s">
				<img src="{{ asset('css/img/about/g3.png') }}" class="wow fadeIn col-sm-4 d-none d-sm-block" data-wow-delay="1.4s">
			</div>
		</div>
	</div>
	<div class="content n4">
		<div class="box">
			<h1 class="wow fadeIn" data-wow-delay="0.7s">分析は次のステージへ</h1>
			<h3 class="wow fadeIn" data-wow-delay="1.2s">高性能なコンピュータにより、検索ワードを分析。</h3>
			<h3 class="wow fadeIn" data-wow-delay="1.7s">強力なAIがあなたをサポートします。</h3>
		</div>
	</div>
	<script type="text/javascript" src="{{ asset('js/wow.js') }}"></script>
	<script>
		new WOW().init();
	</script>
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/js/bootstrap.min.js" integrity="sha384-a5N7Y/aK3qNeh15eJKGWxsqtnX/wWdSZSKp+81YjTmS15nvnvxKHuzaWwXHDli+4" crossorigin="anonymous"></script>
</body>
</html>