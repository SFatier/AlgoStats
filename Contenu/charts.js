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
     rst = new Array();
	

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
    	
    	result =  tri_par_insertion(liste);
    	rst[0] = result[0];
    	result = tri_a_bulles(liste);
    	rst[1] = result[0];
    	result = tri_par_selection(liste);
    	rst[2] = result[0];
    	result = tri_peigne(liste);
    	rst[3] = result[0];
    	//result = tri_fusion(liste);
    	rst[4] = null;
    	result = tri_shell(liste);
    	rst[5] = result[0];
    	//result = tri_rapide(liste);
    	rst[5] = null;
    	console.log(rst);
    }else{
    	while (y < axeyValues.length)
    	{
    		switch (axeyValues[y])
    		{
    			case  "Insertion":
    				result =  tri_par_insertion(liste);
    			break;

				case "Selection" :
					result = tri_par_selection(liste);
				break;

				case "Bulle" : 
			    	result = tri_a_bulles(liste);
				break;

				case "Shell": 
			    	result = tri_shell(liste);
				break;

				case "Fusion":
			    	//result = tri_fusion(liste);
				break;

				case "Rapide": 
			    	//result = tri_rapide(liste);
				break;

				case "Peigne":
					result = tri_peigne(liste);
				break;
    		}
    		rst[y] = result[0];
    		y++;
    	}
    	console.log(rst);

    	array = new Array();
    	array[0] = axeyValues;
    	array[1] = rst;

	   	add2 (array);
    	return array;
    }
};

function loadgraph (array) {
	}

var data2 = {
            labels: ["test"],
            datasets: [{
                label: 'Dataset 1',
                borderWidth: 1,
                data: [
                ]
            }]
        };


window.onload = function() {
		var ctx = "myChart";
		window.myBar2 = new Chart(ctx, {
			type: 'bar',
			data: data2,
			options: {
				responsive: true,
				legend: {
					position: 'top',
				}
			}
		});
};

function add2 (rst) {
	console.log(rst);
	if (rst[0] == "All") {
		if (data2.datasets.length > 0) {			
			
			data2.labels.push("Insertion");
			data2.datasets[index].data.push(rst[0]);
			
			data2.labels.push("Bulle");
			data2.datasets[index].data.push(rst[1]);
			
			data2.labels.push("Selection");
			data2.datasets[index].data.push(rst[2]);

			data2.labels.push("Peigne");
			data2.datasets[index].data.push(rst[3]);
			
			data2.labels.push("Fusion");			
			data2.datasets[index].data.push(rst[4]);

			data2.labels.push("Shell");
			data2.datasets[index].data.push(rst[5]);

			data2.labels.push("Rapide");
			data2.datasets[index].data.push(rst[6]);
		}
		window.myBar2.update();
	}else{

	}
};