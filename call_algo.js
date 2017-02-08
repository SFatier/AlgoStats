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

	rst = new Array();
	rst[0] = result[0]; //donnee retourner
	rst[1] = result[1]; //nombre de cycle
	rst[2] = event.target.name;

	add(rst);

	return rst;
}
/*
function ajouter_data(rst)
{
	count = $("#myChart").length;
	console.log(count);
	
	if (count > 0) 
    {
    	var label = rst[2];
    	console.log(label);
    	var data = rst[1];

    	var newDataset = {
        label: "Vendas",
        backgroundColor: 'rgba(99, 255, 132, 0.2)',
        borderColor: 'rgba(99, 255, 132, 1)',
        borderWidth: 1,
        data: [10],
	    }


	    data.datasets.push(newDataset);
        myBar.update();
    }
}
*/

function changebtn_tbx(result){
	//supprime btn et ajoute du result a la place

}
