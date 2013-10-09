
$(function () {
	var chart;
	$(document).ready(function() {
		chart = new Highcharts.Chart({
			chart: {
				renderTo: 'averagePrice',
				type: 'line'
			},
			title: {
				text: "Average Price In Past 30 Days"
			},
			credits: {
				enabled: false
			},
			xAxis: {
				type: 'datetime',
				dateTimeLabelFormats: {
					month: '%B',
					year: '%b'
				}
			},
			yAxis: {
				title: {
					text: 'Price(US Dollar)'
				},
			labels: {
				formatter: function() {
					return this.value;
				}
			}
		},
		tooltip: {
			formatter: function() {
				return '<strong>Price:</strong> ' + this.y + '<br><strong>Date:</strong> ' + Highcharts.dateFormat('%Y %B %e %H:%M', this.x);
			}
		},
		series: [{
			name: 'Dream Price',
			data: [
				[Date.UTC(2013, 1, 21, 14, 39), 550], [Date.UTC(2013, 1, 23, 14, 40), 560], [Date.UTC(2013, 1, 25, 14, 41), 564], [Date.UTC(2013, 1, 28, 14, 45), 555], [Date.UTC(2013, 2, 2, 14, 46), 510], [Date.UTC(2013, 2, 4, 14, 46), 490], [Date.UTC(2013, 2, 8, 18, 18), 450], [Date.UTC(2013, 2, 10, 18, 18), 440], [Date.UTC(2013, 2, 21, 18, 18), 390], [Date.UTC(2013, 2, 27, 18, 19), 380], [Date.UTC(2013, 3, 1, 18, 19), 361], [Date.UTC(2013, 3, 21, 18, 19), 210], [Date.UTC(2013, 4, 21, 18, 19), 200] 

				]
			}, {
			name: 'Ask Price ',
			data: [
				[Date.UTC(2013, 1, 21, 14, 39), 500], [Date.UTC(2013, 1, 23, 14, 40), 510], [Date.UTC(2013, 1, 25, 14, 41), 514], [Date.UTC(2013, 1, 28, 14, 45), 505], [Date.UTC(2013, 2, 2, 14, 46), 460], [Date.UTC(2013, 2, 4, 14, 46), 440], [Date.UTC(2013, 2, 8, 18, 18), 410], [Date.UTC(2013, 2, 10, 18, 18), 400], [Date.UTC(2013, 2, 21, 18, 18), 350], [Date.UTC(2013, 2, 27, 18, 19), 330], [Date.UTC(2013, 3, 1, 18, 19), 311], [Date.UTC(2013, 3, 21, 18, 19), 200], [Date.UTC(2013, 4, 21, 18, 19), 220] 
			]
			}, {
			name: 'Trade Price ',
			data: [
				[Date.UTC(2013, 1, 21, 14, 39), 450], [Date.UTC(2013, 1, 23, 14, 40), 500], [Date.UTC(2013, 1, 25, 14, 41), 505], [Date.UTC(2013, 1, 28, 14, 45), 450], [Date.UTC(2013, 2, 2, 14, 46), 460], [Date.UTC(2013, 2, 4, 14, 46), 440], [Date.UTC(2013, 2, 8, 18, 18), 400], [Date.UTC(2013, 2, 10, 18, 18), 390], [Date.UTC(2013, 2, 21, 18, 18), 300], [Date.UTC(2013, 2, 27, 18, 19), 300], [Date.UTC(2013, 3, 1, 18, 19), 251], [Date.UTC(2013, 3, 21, 18, 19), 200], [Date.UTC(2013, 4, 21, 18, 19), 200]
			]
			}],
		exporting: {
		enabled: false
		}
		});
	});
});
