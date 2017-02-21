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
