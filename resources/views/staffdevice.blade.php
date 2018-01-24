<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width,initial-scale=1">
	<title>staffdevice</title>

</head>
<link rel="stylesheet" href="staffdevice.css"  type="text/css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/css/bootstrap.min.css" integrity="sha384-Zug+QiDoJOrZ5t4lssLdxGhVrurbmBWopoEl+M6BdEfwnCJZtKxi1KgxUyJq13dy" crossorigin="anonymous">

<body>
	<div class="jumbotron">
		<div class="jumbocolor">
			<h1 class="display-3">本検索サービス</h1>
			<p class="lead">お勧めの本情報をお届けします</p>
			
		</div>
	</div>
	<div class="container">
		<div class="row">
			
			<div class="form-control col-sm-8 offset-sm-2">
				<div class="row">
					<div class="col-sm-8 offset-sm-4">
						　<label>お客様情報入力
						</label>
					</div>
				</div>
				<div class="row">
					<div class="logincardyes col-sm-6 offset-sm-2">
						<label>Tカード持ちは</label>
					</div>
					<div class="Tcardok col-sm-4">
						<form action="staffdevicegetIDTcard" method="get">
						<button type="submit" class="btn btn-primary">こちら</button>
					</form>
					</div>
				</div>
				<div class="row">
					<div class="logincardno col-sm-6 offset-sm-2">
						<label>Tカードなしは</label>
					</div>
					<div class="Tcardno col-sm-4">
						<form action="IDregister" method="get">
						<button type="submit"  class="btn btn-danger">こちら</button>
					</form>
					</div>
				</div>
			</div>
			</div>
		</div>
	</div>
	<div class="container">
		<div class="row">
			
			<div class="form-control col-sm-8 offset-sm-2">
				<div class="row">
					<div class="logincard col-sm-5 offset-sm-4">
						　<label>店舗内簡易検索</label>
					</div>
					
							
							<div class="form col-sm-7 offset-sm-2">
								<input type="text" name="searchword" class="form-control">
								<button class="btn btn-secondary col-sm-2 offset-sm-5" type="submit">検索</button>
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