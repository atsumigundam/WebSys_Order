@extends('layouts.analysis')

@section('title', 'アクセスログ分析')

@section('css')
	@parent
	<link rel="stylesheet" type="text/css" href="{{ asset('css/searchlog.css') }}">
@endsection

@section('navbar')
	@parent
@endsection

@section('content')
	<div class="container">
		<h1>なにもないよ</h1>
	</div>
@endsection

@section('script')
	@parent
	<script type="text/javascript" src="{{ asset('js/chart.js') }}"></script>
@endsection