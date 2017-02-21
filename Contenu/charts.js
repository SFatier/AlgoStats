var color = Chart.helpers.color;
var horizontalBarChartData = {
    labels: ["Triée", "Inverse", "Random", "Quasi", "Multi", "Moyenne"],
    datasets: [{
        label: 'Dataset 1',
        backgroundColor: color(window.chartColors.red).alpha(0.5).rgbString(),
        borderColor: window.chartColors.red,
        borderWidth: 1,
        data: []
    },

    ]
};

window.onload = function() {
    var ctx = "canvas";
    window.myHorizontalBar = new Chart(ctx, {
        type: 'horizontalBar',
        data: horizontalBarChartData,
        options: {
            // Elements options apply to all of the options unless overridden in a dataset
            // In this case, we are setting the border of each horizontal bar to be 2px wide
            elements: {
                rectangle: {
                    borderWidth: 2,
                }
            },
            responsive: true,
            legend: {
                position: 'right',
            },
            title: {
                display: true,
                text: 'Comparaison de graphique'
            }
        }
    });
};

var colorNames = Object.keys(window.chartColors);
/*document.getElementById('addDataset').addEventListener('click', function() {

    var colorName = colorNames[horizontalBarChartData.datasets.length % colorNames.length];;
    var dsColor = window.chartColors[colorName];
    var newDataset = {
        label: 'peigne',
        data: [10,20,32,42,54,60],
        backgroundColor: 'yellow'
    };
    horizontalBarChartData.datasets.push(newDataset);
    window.myHorizontalBar.update();
});*/

$("#addDataset").on('click', function() {

    var colorName = colorNames[horizontalBarChartData.datasets.length % colorNames.length];;
    var dsColor = window.chartColors[colorName];
    var newDataset = {
        label: 'peigne',
        data: [10,20,32,42,54,60],
        backgroundColor: 'yellow'
    };
    horizontalBarChartData.datasets.push(newDataset);
    window.myHorizontalBar.update();
});

function add_time(jarray){

	//console.log(jarray[0])
	    var colorName = colorNames[horizontalBarChartData.datasets.length % colorNames.length];;
	    var dsColor = window.chartColors[colorName];
	    var newDataset = {
	        label: 'peigne',
	        data: jarray[0],
	        backgroundColor: 'yellow'
	    };
	    horizontalBarChartData.datasets.push(newDataset);
	   window.myHorizontalBar.update();
}