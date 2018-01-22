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
						<div id="chart_word"></div>
					</div>
				</div>
				<div class="col-md-6">
					<div class="card box mt-4">
						<div id="chart_count"></div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="tab-pane fade" id="past" role="tabpanel" aria-labelledby="past-tab">
		<div class="container">
			ここには過去のデータが表示される
		</div>
	</div>
</div>
@endsection

@section('script')
	@parent
	<script type="text/javascript">
		// 円グラフの表示データ
		var data = [
			{ label:"大海のすべて", y:11110, color:"#e74c3c"},
			{ label:"静かな華道", y:8000, color:"#f39c12"},
			{ label:"杏仁豆腐と林と堂本剛", y:5431, color:"#16a085"},
			{ label:"坂道のアポロン", y:4031, color:"#d35400"},
			{ label:"ラバランチュラ 全員原付", y:13090, color:"#2c3e50"},
			{ label:"その他", y:1000, color:"#3943b7"}
		];

		var chart_word = new CanvasJS.Chart("chart_word", {
			animationEnabled: true,
        	animationDuration: 800,
        	title: { text: '検索ワード上位', fontColor: '#222', fontSize: 16, margin: 15 },
        	subtitles: [{ text: "2018 1月", fontWeight: "normal" }],
			data: [{
				type: 'pie',
				toolTipContent: "<b>{label}</b>: {y}件",
				indexLabel: "{label}: {y}件",
				dataPoints: data
			}]
		});
		chart_word.render();

		$("#chart_word").height(chart_word.height);

		//検索件数チャート
		var chart_count = new CanvasJS.Chart("chart_count", {
			animationEnabled: true,
        	animationDuration: 800,
			theme: "light2",
        	title: { text: '最近の検索数', fontColor: '#222', fontSize: 16, fontWeight: "normal", margin: 15 },
			axisX:{
				valueFormatString: "DD MMM",
				crosshair: {
					enabled: true,
					snapToDataPoint: true
				}
			},
			axisY: {
				title: "検索件数",
				crosshair: {
					enabled: true
				}
			},
			toolTip:{
				shared:true
			},  
			legend:{
				cursor:"pointer",
				verticalAlign: "bottom",
				horizontalAlign: "left",
				dockInsidePlotArea: true,
				itemclick: toogleDataSeries
			},
			data: [{
				type: "line",
				showInLegend: true,
				name: "総検索数",
				markerType: "square",
				xValueFormatString: "DD MMM, YYYY",
				color: "#F08080",
				dataPoints: [
					{ x: new Date(2017, 0, 3), y: 1590 },
					{ x: new Date(2017, 0, 4), y: 2000 },
					{ x: new Date(2017, 0, 5), y: 1100 },
					{ x: new Date(2017, 0, 6), y: 900 },
					{ x: new Date(2017, 0, 7), y: 1400 },
					{ x: new Date(2017, 0, 8), y: 1800 },
					{ x: new Date(2017, 0, 9), y: 1300 },
					{ x: new Date(2017, 0, 10), y: 1500 },
					{ x: new Date(2017, 0, 11), y: 1200 },
					{ x: new Date(2017, 0, 12), y: 1800 },
					{ x: new Date(2017, 0, 13), y: 2000 },
					{ x: new Date(2017, 0, 14), y: 2200 },
					{ x: new Date(2017, 0, 15), y: 2100 },
					{ x: new Date(2017, 0, 16), y: 1700 }
				]
			}]
		});
		chart_count.render();

		function toogleDataSeries(e){
			if (typeof(e.dataSeries.visible) === "undefined" || e.dataSeries.visible) {
				e.dataSeries.visible = false;
			} else{
				e.dataSeries.visible = true;
			}
			chart_count.render();
		}

		$("#chart_count").height(chart_count.height);

	</script>
@endsection