// 検索ワード上位
function create_chart_word(month, chart_word_id, data) {
	var chart_word = new CanvasJS.Chart(chart_word_id, {
		animationEnabled: true,
		animationDuration: 800,
		title: { text: '検索ワード上位', fontColor: '#222', fontSize: 16, margin: 15 },
		subtitles: [{ text: `${month}月`, fontWeight: "normal" }],
		data: [{
			type: 'pie',
			toolTipContent: "<b>{label}</b>: {y}件",
			indexLabel: "{label}: {y}件",
			dataPoints: data
		}]
	});
	chart_word.render();

	$(`#${chart_word_id}`).height(chart_word.height);
	$parent = $(`#${chart_word_id}`).parent();
	$(`#${chart_word_id}`).width($parent.innerWidth());
	console.log($parent.innerWidth());
}

// 検索件数チャート
function create_chart_count(chart_count_id, data) {
	var chart_count = new CanvasJS.Chart(chart_count_id, {
		animationEnabled: true,
		animationDuration: 800,
		theme: "light2",
		title: { text: `${data[0].x.getMonth()+1}月の検索数`, fontColor: '#222', fontSize: 16, fontWeight: "normal", margin: 15 },
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
			dataPoints: data
		}]
	});
	chart_count.render();

	$(`#${chart_count_id}`).height(chart_count.height);

	function toogleDataSeries(e){
		if (typeof(e.dataSeries.visible) === "undefined" || e.dataSeries.visible) {
			e.dataSeries.visible = false;
		} else{
			e.dataSeries.visible = true;
		}
		chart_count.render();
	}
}

// 1月の円グラフの表示データ
var data_word_Jan = [
	{ label:"大海のすべて", y:11110, color:"#e74c3c"},
	{ label:"静かな華道", y:8000, color:"#f39c12"},
	{ label:"杏仁豆腐と林と堂本剛", y:5431, color:"#16a085"},
	{ label:"坂道のアポロン", y:4031, color:"#d35400"},
	{ label:"ラバランチュラ 全員原付", y:13090, color:"#2c3e50"},
	{ label:"その他", y:1000, color:"#3943b7"}
];

// 12月の円グラフの表示データ
var data_word_Dec = [
	{ label:"渥美半島菜の花まつり", y:9900, color:"#e74c3c"},
	{ label:"和式", y:5000, color:"#f39c12"},
	{ label:"大きなおうち", y:11200, color:"#16a085"},
	{ label:"シージ", y:5400, color:"#d35400"},
	{ label:"ラバランチュラ 全員渥美", y:7800, color:"#2c3e50"},
	{ label:"その他", y:2000, color:"#3943b7"}
];

// 1月の総検索数データ
var data_count_Jan = [
	{ x: new Date(2017, 0, 1), y: 1700 },
	{ x: new Date(2017, 0, 2), y: 1300 },
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
	{ x: new Date(2017, 0, 16), y: 1700 },
	{ x: new Date(2017, 0, 17), y: 1600 },
	{ x: new Date(2017, 0, 18), y: 1800 },
	{ x: new Date(2017, 0, 19), y: 1450 },
	{ x: new Date(2017, 0, 20), y: 1900 },
	{ x: new Date(2017, 0, 21), y: 2100 },
	{ x: new Date(2017, 0, 22), y: 2000 },
	{ x: new Date(2017, 0, 23), y: 1800 },
	{ x: new Date(2017, 0, 24), y: 1700 },
	{ x: new Date(2017, 0, 25), y: 1780 },
	{ x: new Date(2017, 0, 26), y: 1700 },
	{ x: new Date(2017, 0, 27), y: 1900 },
	{ x: new Date(2017, 0, 28), y: 2222 },
	{ x: new Date(2017, 0, 29), y: 2190 },
	{ x: new Date(2017, 0, 30), y: 1780 },
	{ x: new Date(2017, 0, 31), y: 1900 },
];

// 12月の総検索数データ
var data_count_Dec = [
	{ x: new Date(2017, 11, 1), y: 1700 },
	{ x: new Date(2017, 11, 2), y: 1300 },
	{ x: new Date(2017, 11, 3), y: 1590 },
	{ x: new Date(2017, 11, 4), y: 1800 },
	{ x: new Date(2017, 11, 5), y: 1100 },
	{ x: new Date(2017, 11, 6), y: 900 },
	{ x: new Date(2017, 11, 7), y: 1400 },
	{ x: new Date(2017, 11, 8), y: 1300 },
	{ x: new Date(2017, 11, 9), y: 1600 },
	{ x: new Date(2017, 11, 10), y: 1500 },
	{ x: new Date(2017, 11, 11), y: 1400 },
	{ x: new Date(2017, 11, 12), y: 1710 },
	{ x: new Date(2017, 11, 13), y: 2000 },
	{ x: new Date(2017, 11, 14), y: 2540 },
	{ x: new Date(2017, 11, 15), y: 2100 },
	{ x: new Date(2017, 11, 16), y: 1900 },
	{ x: new Date(2017, 11, 17), y: 1750 },
	{ x: new Date(2017, 11, 18), y: 1800 },
	{ x: new Date(2017, 11, 19), y: 1800 },
	{ x: new Date(2017, 11, 20), y: 1500 },
	{ x: new Date(2017, 11, 21), y: 1680 },
	{ x: new Date(2017, 11, 22), y: 1800 },
	{ x: new Date(2017, 11, 23), y: 2200 },
	{ x: new Date(2017, 11, 24), y: 2300 },
	{ x: new Date(2017, 11, 25), y: 2500 },
	{ x: new Date(2017, 11, 26), y: 1700 },
	{ x: new Date(2017, 11, 27), y: 1900 },
	{ x: new Date(2017, 11, 28), y: 2222 },
	{ x: new Date(2017, 11, 29), y: 1800 },
	{ x: new Date(2017, 11, 30), y: 1920 },
	{ x: new Date(2017, 11, 31), y: 1763 },
];

create_chart_word(1, "chart_word_current", data_word_Jan);

create_chart_word(12, "chart_word_preview", data_word_Dec);

create_chart_count("chart_count_current", data_count_Jan);

create_chart_count("chart_count_preview", data_count_Dec);