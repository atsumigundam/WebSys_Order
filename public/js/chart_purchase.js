// 購入ログ
function create_chart_purchase(month, chart_purchase_id, title, data) {
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

	$(`#${chart_purchase_id}`).height(chart_purchase.height);
	$parent = $(`#${chart_purchase_id}`).parent();
	$parent.height($(`#recent`).height());
}

var data_purchase_publischer = purchase_publisher;

create_chart_access(month_current, "chart_purchase_publisher", "購入された出版社上位", data_purchase_publischer);