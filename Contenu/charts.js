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
		var ctx2 = "myChart";
		window.myBar2 = new Chart(ctx2, {
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
     tab_quasi = new Array();

    for(var i = 0; i < axey.options.length; i++)
    {       
      if(axey.options[i].selected == true)
      {
        axeyValues.push(axey.options[i].value);
        
      }        
    }
    //console.log(axeyValues);

    if(axeyValues[0] == "All")
    {
    	//serie triee
    	tab_triee = new Array();
    	result =  tri_par_insertion(liste);
    	tab_triee[0] = result[0];
    	result = tri_a_bulles(liste);
    	tab_triee[1] = result[0];
    	result = tri_par_selection(liste);
    	tab_triee[2] = result[0];
    	result = tri_peigne(liste);
    	tab_triee[3] = result[0];
    	//result = tri_fusion(liste);
    	tab_triee[4] = null;
    	result = tri_shell(liste);
    	tab_triee[5] = result[0];
    	//result = tri_rapide(liste);
    	tab_triee[6] = null;
    	rst[0] = tab_triee;	

    	/*//serie Inverse
    	tab_inverse = new Array();
    	result =  tri_par_insertion(liste);
    	tab_inverse[0] = result[0];
    	result = tri_a_bulles(liste);
    	tab_inverse[1] = result[0];
    	result = tri_par_selection(liste);
    	tab_inverse[2] = result[0];
    	result = tri_peigne(liste);
    	tab_inverse[3] = result[0];
    	//result = tri_fusion(liste);
    	tab_inverse[4] = null;
    	result = tri_shell(liste);
    	tab_inverse[5] = result[0];
    	//result = tri_rapide(liste);
    	tab_inverse[6] = null;
    	rst[1] = tab_inverse;	


    	//serie Random
    	tab_random = new Array();
    	result =  tri_par_insertion(liste);
    	tab_random[0] = result[0];
    	result = tri_a_bulles(liste);
    	tab_random[1] = result[0];
    	result = tri_par_selection(liste);
    	tab_random[2] = result[0];
    	result = tri_peigne(liste);
    	tab_random[3] = result[0];
    	//result = tri_fusion(liste);
    	tab_random[4] = null;
    	result = tri_shell(liste);
    	tab_random[5] = result[0];
    	//result = tri_rapide(liste);
    	tab_random[6] = null;
    	rst[2] = tab_random;	

    	//serie Quasi
    	tab_quasi = new Array();
    	result =  tri_par_insertion(liste);
    	tab_quasi[0] = result[0];
    	result = tri_a_bulles(liste);
    	tab_quasi[1] = result[0];
    	result = tri_par_selection(liste);
    	tab_quasi[2] = result[0];
    	result = tri_peigne(liste);
    	tab_quasi[3] = result[0];
    	//result = tri_fusion(liste);
    	tab_quasi[4] = null;
    	result = tri_shell(liste);
    	tab_quasi[5] = result[0];
    	//result = tri_rapide(liste);
    	tab_quasi[6] = null;
    	rst[3] = tab_quasi;	

    	//serie Multi
    	tab_multi = new Array();
    	result =  tri_par_insertion(liste);
    	tab_multi[0] = result[0];
    	result = tri_a_bulles(liste);
    	tab_multi[1] = result[0];
    	result = tri_par_selection(liste);
    	tab_multi[2] = result[0];
    	result = tri_peigne(liste);
    	tab_multi[3] = result[0];
    	//result = tri_fusion(liste);
    	tab_multi[4] = null;
    	result = tri_shell(liste);
    	tab_multi[5] = result[0];
    	//result = tri_rapide(liste);
    	tab_multi[6] = null;
    	rst[4] = tab_multi;rst[4] = tab_multi;


    	//serie Medium
    	tab_medium = new Array();
    	result =  tri_par_insertion(liste);
    	tab_medium[0] = result[0];
    	result = tri_a_bulles(liste);
    	tab_medium[1] = result[0];
    	result = tri_par_selection(liste);
    	tab_medium[2] = result[0];
    	result = tri_peigne(liste);
    	tab_medium[3] = result[0];
    	//result = tri_fusion(liste);
    	tab_medium[4] = null;
    	result = tri_shell(liste);
    	tab_medium[5] = result[0];
    	//result = tri_rapide(liste);
    	tab_medium[6] = null;
    	rst[5] = tab_medium;*/

    	//console.log(rst);
    	
    }/*else{
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
    }
*/
    	array = new Array();
    	array[0] = axeyValues;
    	array[1] = rst;

	   	add2 (array);
  //  	return array;
};


var data2 = {
            datasets: [{
                label: 'Dataset 1',
                borderWidth: 1,
                data: [
                ]
            }]
        };


function add2 (rst) {
	var i = 0;
	console.log(rst);
	if (rst[0] == "All") {
		if (data2.datasets.length > 0) {			
			for (var index = 0; index < data2.datasets.length; ++index) {

				data2.labels.push("Insertion Triée");
				data2.datasets[index].data.push(rst[1][0][0]);

/*				data2.labels.push("Bulle Triée");
				data2.datasets[index].data.push(rst[1][1][0]);
				
				data2.labels.push("Selection Triée");
				data2.datasets[index].data.push(rst[1][2][0]);

				data2.labels.push("Peigne Triée");
				data2.datasets[index].data.push(rst[1][3][0]);
				
				data2.labels.push("Fusion Triée");			
				data2.datasets[index].data.push(rst[1][4][0]);

				data2.labels.push("Shell Triée");
				data2.datasets[index].data.push(rst[1][5][0]);
*/
				//data2.labels.push("Rapide");
				//data2.datasets[index].data.push(rst[1][6][0]);
			}
		}
		window.myBar2.update();
	}else{

	}
};