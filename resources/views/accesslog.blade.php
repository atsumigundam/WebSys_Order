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
						<div id="chart_access_current"></div>
					</div>
				</div>
				<div class="col-md-6">
					<div class="card box mt-4" id="recent">
						<label>最近のアクセス</label>
						<div>
							<label>1月</label>
							<div class="card" style="text-align: left;">
								<label class="card-header" style="background-color: #1e90ff; color: #FFF;">2018/1/29</label>
								<ul class="list-group list-group-flush">
									<a href="#" class="list-group-item">
										<label style="margin: 0;">1:11</label>
										<label style="margin: 0;">風天 渥美清のうた</label>
									</a>
									<a href="#" class="list-group-item">リスト2</a>
									<a href="#" class="list-group-item">リスト3</a>
									<a href="#" class="list-group-item">リスト4</a>
									<a href="#" class="list-group-item">リスト5</a>
									<a href="#" class="list-group-item">リスト6</a>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-6">
					<div class="card box mt-4">
						<div id="chart_word_multi"></div>
					</div>
				</div>
				<div class="col-md-6">
					<div class="card box mt-4">
						<div id="chart_no_hit_word"></div>
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
	<script type="text/javascript">
		var month_current = @json($month_current);
		var access_current = @json($access_current_array);
	</script>
	<script type="text/javascript" src="{{ asset('js/chart_access.js') }}"></script>
@endsection