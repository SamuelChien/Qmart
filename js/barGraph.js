$(function () {
        $('#monthPrice').highcharts({
            chart: {
                type: 'column'
            },
            title: {
                text: 'Average Price This Month'
            },
            xAxis: {
                categories: [
                    '$0.00 ~ $100',
                    '$100 ~ $200',
                    '$200 ~ $230',
                    '$230 ~ $260',
                    '$260 ~ $290',
                    '$290 ~ $320',
                    '$320 ~ $350',
                    '$350 ~ $380',
                    '$380 ~ $410',
                    '$440 ~ $470',
                    '$470 ~ $500',
                    '$500 ~ $999'
                ],

                labels: {
                    rotation: -45,
                    align: 'right',
                    style: {
                        fontSize: '13px',
                        fontFamily: 'Verdana, sans-serif'
                    }
                }

            },
            yAxis: {
                min: 0,
                title: {
                    text: 'Trade Count'
                }
            },
            exporting: {
                enabled: false
            },
            credits: {
                enabled: false
            },
            tooltip: {
                headerFormat: '<span style="font-size:10px"><b>{point.key}</b></span><table>',
                pointFormat: '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +
                    '<td style="padding:0"><b>{point.y:.1f} Trades</b></td></tr>',
                footerFormat: '</table>',
                shared: true,
                useHTML: true
            },
            plotOptions: {
                column: {
                    pointPadding: 0.2,
                    borderWidth: 0
                }
            },
            series: [{
                name: 'Dream Price',
                data: [5, 4, 17, 10, 12, 13, 14, 19, 23, 22, 18, 17]
            }, {
                name: 'Ask Price',
                data: [4, 10, 12, 13, 13, 14, 19, 23, 22, 18, 17, 17]
            }, {
                name: 'Trade Price',
                data: [10, 12, 13, 14, 19, 23, 22, 18, 17, 17, 5, 4]
            }]
        });
    });
