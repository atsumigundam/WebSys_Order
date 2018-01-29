// 購入ログ
function create_chart_purchase(month, chart_purchase_id, title, data) {
	var chart_purchase = new CanvasJS.Chart(chart_purchase_id, {
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
	chart_purchase.render();

	$(`#${chart_purchase_id}`).height(chart_purchase.height);
}

function create_chart_price(month, id, title, data) {
	var chart_price = new CanvasJS.Chart(id, {
		animationEnabled: true,
		animationDuration: 800,
		theme: "light2",
		title: { text: title, fontWeight: "normal", fontFamily: 'Arial', fontColor: '#222', fontSize: 16, margin: 15 },
		subtitles: [{ text: `${month}月`, fontWeight: "normal", fontFamily: 'Arial' }],
		data: [{
			type: 'column',
			showInLegend: true, 
			legendMarkerColor: "grey",
			legendText: "価格帯 (円)",
			dataPoints: data
		}]
	})
	chart_price.render();

	$(`#${id}`).height(chart_price.height);
}

var data_purchase_book = purchase_book;

var data_purchase_publischer = purchase_publisher;

var data_price_range = price_range;

create_chart_purchase(month_current, "chart_purchase_book", "売上上位本", data_purchase_book);

create_chart_purchase(month_current, "chart_purchase_publisher", "出版社別売上上位", data_purchase_publischer);

create_chart_price(month_current, "chart_purchase_price", "価格別購入数", data_price_range);