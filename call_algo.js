function call (){
	var option = sessionStorage.getItem('rst');
	console.log(option);
	if (option = 1)
	{
		liste = new Array(10,11,1,2,3,4,5,6,7,8,9);
	}
	else if (option = 2) 
	{
		console.log("ajouter tab 100");
	}
	else if (option = 3)
	{
		console.log("ajouter tab 1000");
	}
	else
	{
		console.log("ajouter tab 10 000");
	}

	console.log(event.target.name);
	
	switch (event.target.name) {
	//triee
		case 'btnTribulle_triee':
			result = tri_a_bulles(liste);
			break;
		case 'btnTriFusion_triee':
			result = tri_fusion(liste);
			break;
		case 'btnTriInsertion_triee':
			result = tri_par_insertion(liste);
			break;
		case 'btnTriSelection_triee':
			result = tri_par_selection(liste);
			break;
		case 'btnTriPeigne_triee':
			result = tri_peigne(liste);
			break;
		case 'btnTriRapide_triee':
			result = tri_rapide(liste);
			break;
		case 'btnTriShell_triee':
			result = tri_shell(liste);
			break;

	//inverser
		case 'btnTribulle_inverse':
			result = tri_a_bulles(liste);
			break;
		case 'btnTriFusion_inverse':
			result = tri_fusion(liste);
			break;
		case 'btnTriInsertion_inverse':
			result = tri_par_insertion(liste);
			break;
		case 'btnTriSelection_inverse':
			result = tri_par_selection(liste);
			break;
		case 'btnTriPeigne_inverse':
			result = tri_peigne(liste);
			break;
		case 'btnTriRapide_inverse':
			result = tri_rapide(liste);
			break;
		case 'btnTriShell_inverse':
			result = tri_shell(liste);
			break;

	//random
		case 'btnTribulle_random':
			result = tri_a_bulles(liste);
			break;
		case 'btnTriFusion_random':
			result = tri_fusion(liste);
			break;
		case 'btnTriInsertion_random':
			result = tri_par_insertion(liste);
			break;
		case 'btnTriSelection_random':
			result = tri_par_selection(liste);
			break;
		case 'btnTriPeigne_random':
			result = tri_peigne(liste);
			break;
		case 'btnTriRapide_random':
			result = tri_rapide(liste);
			break;
		case 'btnTriShell_random':
			result = tri_shell(liste);
			break;    

		//Quasi
		case 'btnTribulle_quasi':
			result = tri_a_bulles(liste);
			break;
		case 'btnTriFusion_quasi':
			result = tri_fusion(liste);
			break;
		case 'btnTriInsertion_quasi':
			result = tri_par_insertion(liste);
			break;
		case 'btnTriSelection_quasi':
			result = tri_par_selection(liste);
			break;
		case 'btnTriPeigne_quasi':
			result = tri_peigne(liste);
			break;
		case 'btnTriRapide_quasi':
			result = tri_rapide(liste);
			break;
		case 'btnTriShell_quasi':
			result = tri_shell(liste);
			break; 

		//multi
		case 'btnTribulle_multi':
			result = tri_a_bulles(liste);
			break;
		case 'btnTriFusion_multi':
			result = tri_fusion(liste);
			break;
		case 'btnTriInsertion_multi':
			result = tri_par_insertion(liste);
			break;
		case 'btnTriSelection_multi':
			result = tri_par_selection(liste);
			break;
		case 'btnTriPeigne_multi':
			result = tri_peigne(liste);
			break;
		case 'btnTriRapide_multi':
			result = tri_rapide(liste);
			break;
		case 'btnTriShell_multi':
			result = tri_shell(liste);
			break;    	    

		//medium
		case 'btnTribulle_medium':
			result = tri_a_bulles(liste);
			break;
		case 'btnTriFusion_medium':
			result = tri_fusion(liste);
			break;
		case 'btnTriInsertion_medium':
			result = tri_par_insertion(liste);
			break;
		case 'btnTriSelection_medium':
			result = tri_par_selection(liste);
			break;
		case 'btnTriPeigne_medium':
			result = tri_peigne(liste);
			break;
		case 'btnTriRapide_medium':
			result = tri_rapide(liste);
			break;
		case 'btnTriShell_medium':
			result = tri_shell(liste);
			break;    	   	  	   	  	
	}
	console.log(result);

	ajouter_data(result[1]);

	return result;
}

function ajouter_data(result)
{
	count = $("#myChart").length;
	console.log(count);
	
	if (myChart.datasets.length > 0) 
    {
       // var month = MONTHS[myChart.labels.length % MONTHS.length];
        //myChart.labels.push(month);
        for (var index = 0; index < myChart.datasets.length; ++index) {
            //window.myBar.addData(randomScalingFactor(), index);
            myChart.datasets[index].data.push(result);
        }
        myBar.update();
    }
}

function changebtn_tbx(result){
	//supprime btn et ajoute du result a la place

}
