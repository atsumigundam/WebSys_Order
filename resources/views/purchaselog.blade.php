@extends('layouts.analysis')

@section('title', '購入ログ分析')

@section('css')
	@parent
	<link rel="stylesheet" type="text/css" href="{{ asset('css/searchlog.css') }}">
@endsection

@section('navbar')
	@parent
@endsection

@section('content')
	<div class="container">
		<h1 style="text-align: right;">ここにもないよ</h1>
	</div>
@endsection

@section('script')
	@parent
	<script type="text/javascript" src="{{ asset('js/chart.js') }}"></script>
@endsection