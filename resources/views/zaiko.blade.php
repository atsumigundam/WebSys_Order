<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html lang="ja">
  <head>
  <link href="./sample1.css" rel="stylesheet" type="text/css">
  <meta charset="utf-8">
   <meta http-equiv="Content-Type" content="text/html; charset=Shift_JIS">
  <meta name="author" content="70612002 渥美和大"> 
  <title>在庫検索システム</title>
  </head>
  <body>
  <div style="position:absolute; top:50px; left:450px;">
		<form action="kadai4.html" >
		<button style="width:100px;height:50px;"
    	form=""
    	onclick="javascript:location.href = 'kadai3.html';">
    	検索候補一覧へ
		</button>
  </form>
		</div>
		<div style="position:absolute; top:50px; left:650px;">
		<form action="kadai4.html" >
		<button style="width:100px;height:50px;"
    	form=""
    	onclick="javascript:location.href = 'kadai2.html';">
    	検索ページへ
		</button>
  </form>
		</div>
 <div style="position:absolute; top:100px; left:100px;">
<table border="1" width="1000">
 <tr>
  <th>参考画像</th>
  <th>タイトル</th>
  <th>作者</th>
  <th>発行年月</th>
  <th>定価</th>
  <th>ISBN</th>
 </tr>
 
  <td width="100" height="100">
  <img src="{{ $pic }}" width="200" height="200"></td>
  <td>{{$book}}</td>
  <td>{{$author}}</td>
  <td>{{$date}}</td>
  <td>{{$price}}</td>
  <td>{{$ISBN}}</td>
  
  </table>
</div>
 <div style="position:absolute; top:400px; left:100px;">
<table border="1" width="1000">
 <tr>
  <th>店舗</th>
  <th>在庫状況</th>
  <th>注文</th>
 </tr>
 <tr align="center">
  <td>{{$shop1->name}}</td>
  <td>{{$zaiko1}}</td>
  <td><form action="/order/{{ $ISBN }}/{{ $shop1->id }}" method="get">
		<button style="width:70px;height:50px;" type="submit">
    	注文へ
		</button></form></td>
 <tr align="center">
 <td>{{$shop2->name}}</td>
 <td>{{$zaiko2}}</td>
 <td><form action="/order/{{ $ISBN }}/{{ $shop2->id }}" method="get" >
		<button style="width:70px;height:50px;" type="submit">
    	注文へ
		</button></form></td>
 <tr align="center">
 <td>{{$shop3->name}}</td>
 <td>{{$zaiko3}}</td>
 <td><form action="/order/{{ $ISBN }}/{{ $shop3->id }}" method="get" >
		<button style="width:70px;height:50px;" type="submit">
    	注文へ
		</button></form></td>
 <tr align="center">
 <td>{{$shop4->name}}</td>
 <td>{{$zaiko4}}</td>
 <td><form action="/order/{{ $ISBN }}/{{ $shop4->id }}" method="get" >
		<button style="width:70px;height:50px;" type="submit">
    	注文へ
		</button></form></td>
		</div>
		<tr align="center">
</body>

