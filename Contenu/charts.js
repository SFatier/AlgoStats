	window.onload = function() {
		var ctx = "canvas";
		window.myBar = new Chart(ctx, {
			type: 'bar',
			data: {
				labels: ["Triée", "Inverse", "Random", "Quasi", "Multi", "Moyenne"],
				datasets: [
				{
					label: 'insertion',
					data: [1,2,3,4,5,6],
					backgroundColor: 'red'
				},
				{
					label: 'selection',
					data: [1,2,3,4,5,6],
					backgroundColor: 'green'
				},
				{
					label: 'bulle',
					data: [1,2,3,4,5,6],
					backgroundColor: 'blue'
				},
				{
					label: 'shell',
					data: [1,2,3,4,5,6],
					backgroundColor: 'cyan'
				},
				{
					label: 'fusion',
					data: [1,2,3,4,5,6],
					backgroundColor: 'violet'
				},
				{
					label: 'peigne',
					data: [1,2,3,4,5,6],
					backgroundColor: 'yellow'
				}
				]
			},
			options: {
				responsive: true,
				legend: {
					position: 'top',
				},
				title: {
					display: true,
					text: 'Graphique Triée'
				}
			}
		});
		 var horizontalBarChartData = {
            labels: ["Triée", "Inverse", "Random", "Quasi", "Multi", "Moyenne"],
            datasets: [{
                label: 'Dataset 1',
                data: [
                ]
            }]
        };
		var ctx2 = "myChart";
		window.myBar2 = new Chart(ctx2, {
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
                        text: 'Chart.js Horizontal Bar Chart'
                    }
                }
		});
	};

	function add (rst) {
		if (barChartData.datasets.length > 0) {
			var month = rst[2];
			barChartData.labels.push(month);
			for (var index = 0; index < barChartData.datasets.length; ++index) {
				//window.myBar.addData(randomScalingFactor(), index);
				barChartData.datasets[index].data.push(rst[1]);
			}
			window.myBar.update();
		}
	};


function add2 () {
	var i = 0;
	//if (rst[0] == "All") {
	var newDataset = {
    label: 'peigne',
    data: [10,20,32,42,54,60],
    backgroundColor: 'yellow'
    };
    horizontalBarChartData.datasets.push(newDataset);
};
