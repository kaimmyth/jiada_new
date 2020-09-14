! function($) {
	"use strict";

	var ChartJs = function() {
	};

	ChartJs.prototype.respChart = function respChart(selector, type, data, options) {
		// get selector by context
		var ctx = selector.get(0).getContext("2d");
		// pointing parent container to make chart js inherit its width
		var container = $(selector).parent();

		// enable resizing matter
		$(window).resize(generateChart);

		// this function produce the responsive Chart JS
		function generateChart() {
			// make chart width fit with its container
			var ww = selector.attr('width', $(container).width());
			switch(type) {
			case 'Bar':
				new Chart(ctx).Bar(data, options);
				break;
			case 'Doughnut':
				new Chart(ctx).Doughnut(data, options);
				break;
			}
			
			// Initiate new chart or Redraw

		};
		// run function - render chart at first load
		generateChart();
	},
	ChartJs.prototype.init = function() {
	  /* bar chart */
	    var chartData = null;
        $.ajax({
            async: false,
            url: document.location.origin+'/bar-chart',
            method: "GET",
            contentType: 'application/json',
            success: function (data) {
                chartData = data;
                // alert(chartData);
              }
            });
		var data3 = {
			labels : chartData.lastSixMonths,
			datasets : [{
				fillColor : "#ec407a",
				strokeColor : "#ec407a",
				data : chartData.MonthWiseOpentickets,
			}, {
				fillColor : "#6e8cd7",
				strokeColor : "#6e8cd7",
				data : chartData.MonthWiseClosetickets,
			}]
		}
		this.respChart($("#bar"), 'Bar', data3);
            /* donut chart */
          var pieChart = null; 
          $.ajax({
            async: false,
            url: document.location.origin+'/pie-chart',
            method: "GET",
            contentType: 'application/json',
            success: function (data) {
                pieChart = data;
                // alert(chartData);
              }
            });
		var data1 = pieChart;
		this.respChart($("#doughnut"), 'Doughnut', data1);
	}, $.ChartJs = new ChartJs, $.ChartJs.Constructor =
	ChartJs

}(window.jQuery),

//initializing
function($) {
	"use strict";
	$.ChartJs.init()
}(window.jQuery);