<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <title>在庫検索</title>
</head>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" />
<link href="https://fonts.googleapis.com/earlyaccess/sawarabimincho.css" rel="stylesheet" />
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
<link href="https://use.fontawesome.com/releases/v5.0.4/css/all.css" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="{{ asset('css/top.css') }}">

<body>  
	<div class="site-wrapper">
		<div class="site-wrapper-inner">
			<div class="container">
				<div class="masthead clearfix">
					<div class="container inner"> 
						<h3 class="wf-sawarabimincho">Y書店</h3>
						<form action="{{ url('/search4kids') }}">
							<button class="btn btn-orange" type="submit"><i class="fas fa-child fa-3x fa-white fa-spin-hover"></i></button>
						</form>
					</div>
				</div>
				<div class="inner cover">
					<h1 class="cover-heading wf-sawarabimincho title">在庫検索</h1>
					<p class="lead wf-sawarabimincho content">本のない部屋は、魂のない肉体のようなものだ。</p>
					<form action="searchresult">
						<div class="row">
							<input type="text" name="searchword" class="form-control col-md-11 col-10">
							<button class="btn btn-secondary col-md-1 col-2" type="submit"><i class="fa fa-search"></i></button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</body>
</html>