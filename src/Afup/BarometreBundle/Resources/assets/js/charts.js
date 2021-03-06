$(document).ready(function () {
    $('table.highchart')
        .bind('highchartTable.beforeRender', function (event, highChartConfig) {
            highChartConfig.colors[0] = '#4C6EAF';
            var align = $(this).data('graph-xaxis-labels-align');
            if (align !== undefined) {
                highChartConfig.xAxis.labels.align = align;
            }
        })
        .highchartTable();
});

