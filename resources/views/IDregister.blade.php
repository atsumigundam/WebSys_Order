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
			<p class="lead">このページはTカードをお持ちでないお客様の情報を入力するページです</p>
		</div>
	</div>
	<div class="container">
		<div class="row">
			<div class="form-control col-sm-8 offset-sm-2">

				<div class="row">
					<div= class="col-sm-8 offset-sm-2">
					<form action="staffdeviceconfirm" method="get">
						<div class="form-group">
							<label for="exampleSelect1exampleFormControlSelect1">性別</label>
							<select class="form-control" name="sex" id="exampleFormControlSelect1">
								<option value="男性">男</option>
								<option value="女性">女</option>
							</select>
						</div>
						<div class="form-group">
							<label for="exampleSelect1exampleFormControlSelect1">年齢</label>
							<select class="form-control" name="age" id="exampleFormControlSelect1">
								<option value="10">10代</option>
								<option value="20">20代</option>
								<option value="30">30代</option>
								<option value="40">40代</option>
							</select>
						</div>
						<div class="row">
							<div class="col-sm-8 offset-sm-5">
								<button type="submit" class="btn btn-primary">登録</button>
							</div>
						</div>
					</form>
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