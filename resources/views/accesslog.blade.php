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
							<label>{{ $month_current }}月</label>
							<div class="card align-left">
								<label class="card-header access-header">{{ $date }}</label>
								<ul class="list-group list-group-flush">
									@foreach ($books as $book)
										@if ($book['id'] != 0)
											<div id="accordion">
												<a href="#" class="list-group-item" id="{{ $book['id'] }}" data-toggle="collapse" data-target="#collapse_{{ $book['id'] }}" aria-expanded="true" aria-controls="collapse">
													<span class="badge badge-default">{{ $book['time'] }}</span>
													<label class="no-margin">{{ $book['name'] }}</label>
												</a>
												<div id="collapse_{{ $book['id'] }}" class="collapse" aria-labelledby="{{ $book['id'] }}" data-parent="#accordion">
											    	<div class="card-body">
											    		検索ワード: {{ $book['searchword'] }}
											    	</div>
											    </div>
											</div>
										@else
											<div class="list-group-item">
												<label>---</label>
											</div>
										@endif
									@endforeach
								</ul>
							</div>
						</div>
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