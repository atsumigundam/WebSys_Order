@extends('layouts.analysis')

@section('title', '検索ログ分析')

@section('css')
	@parent
	<link rel="stylesheet" type="text/css" href="{{ asset('css/searchlog.css') }}">
@endsection

@section('navbar')
	@parent
@endsection

@section('content')
<ul class="nav nav-tabs" id="myTab" role="tablist">
	<li class="nav-item">
		<a class="nav-link active" id="current-tab" data-toggle="tab" href="#current" role="tab" aria-controls="current" aria-selected="true">現在のデータ</a>
	</li>
	<li class="nav-item">
		<a class="nav-link" id="past-tab" data-toggle="tab" href="#past" role="tab" aria-controls="past" aria-selected="false">過去のデータ</a>
	</li>
</ul>
<div class="tab-content" id="myTabContent">
	<div class="tab-pane fade show active" id="current" role="tabpanel" aria-labelledby="current-tab">
		<div class="container">
			<div class="row">
				<div class="col-md-6">
					<div class="card box mt-4">
						<div id="chart_word_current"></div>
					</div>
				</div>
				<div class="col-md-6">
					<div class="card box mt-4">
						<div id="chart_count_current"></div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="tab-pane fade" id="past" role="tabpanel" aria-labelledby="past-tab">
		<div class="container">
			<div class="row">
				<div class="col-md-6">
					<div class="card box mt-4">
						<div id="chart_word_preview"></div>
					</div>
				</div>
				<div class="col-md-6">
					<div class="card box mt-4">
						<div id="chart_count_preview"></div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection

@section('script')
	@parent
	<script type="text/javascript" src="{{ asset('js/chart.js') }}"></script>
@endsection