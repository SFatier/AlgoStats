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


function myFunction(){
	 var form = document.getElementById("log");     
     const axey = form.elements["axey"];
     var axeyValues = [];
     var y = 0;
     liste = new Array(10,11,1,3,4,5,6,7,8,9);
	

    for(var i = 0; i < axey.options.length; i++)
    {       
      if(axey.options[i].selected == true)
      {
        axeyValues.push(axey.options[i].value);
        
      }        
    }
    console.log(axeyValues);

    if(axeyValues[0] == "All")
    {
    	var data1 = tri_par_insertion(list).getTime();
    	console.log(data1);
    }else{

    }
};