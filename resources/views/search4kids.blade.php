<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <title>在庫検索トップ</title>
</head>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" />
<link href="https://fonts.googleapis.com/earlyaccess/sawarabimincho.css" rel="stylesheet" />
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
<link href="https://fonts.googleapis.com/earlyaccess/nicomoji.css" rel="stylesheet" />
<link rel="stylesheet" type="text/css" href="{{ ('css/top4kids.css') }}">

<body>  
	<div class="site-wrapper">
		<div class="site-wrapper-inner">
			<div class="container">
				<div class="masthead clearfix">
					<div class="container inner">
						<h3 class="wf-sawarabimincho chara">Yしょてん</h3>
					</div>
				</div>
				<div class="inner cover">
					<h1 class="cover-heading wf-sawarabimincho title chara">すてきな<ruby>本<rt>ほん</rt></ruby>を<ruby>探<rt>さが</rt></ruby>しにいこう！</h1>

					<p class="lead wf-sawarabimincho content chara"><ruby>本<rt>ほん</rt></ruby>のない<ruby>部屋<rt>へや</rt></ruby>は、<ruby>魂<rt>たましい</rt></ruby>のない<ruby>肉体<rt>にくたい</rt></ruby>のようなものだなぁ。</p>
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
</html