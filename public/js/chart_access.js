// アクセス上位
function create_chart_access(month, chart_access_id, title, data) {
	var chart_acess = new CanvasJS.Chart(chart_access_id, {
		animationEnabled: true,
		animationDuration: 800,
		title: { text: title, fontFamily: 'Arial', fontColor: '#222', fontSize: 16, margin: 15 },
		subtitles: [{ text: `${month}月`, fontWeight: "normal", fontFamily: 'Arial' }],
		data: [{
			type: 'pie',
			toolTipContent: "<b>{label}</b>: {y}件",
			indexLabel: "{label}: {y}件",
			dataPoints: data
		}]
	});
	chart_acess.render();

	$(`#${chart_access_id}`).height(chart_acess.height);
	$parent = $(`#${chart_access_id}`).parent();
	$parent.height($(`#recent`).height());
}

var data_access_current = access_current;

create_chart_access(month_current, "chart_access_current", "アクセス上位", data_access_current);