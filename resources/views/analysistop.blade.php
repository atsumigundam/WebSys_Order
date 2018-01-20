@extends('layouts.analysis')

@section('title', '分析システム')

@section('css')
	@parent
	<link rel="stylesheet" type="text/css" href="{{ asset('css/about.css') }}">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css" />
@endsection

@section('navbar')
	@parent
@endsection

@section('content')
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
@endsection

@section('script')
	@parent
	<script type="text/javascript" src="{{ asset('js/wow.js') }}"></script>
	<script>
		new WOW().init();
	</script>
@endsection