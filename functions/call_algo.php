<?php
//$_GET['id'] <- recupere le button avec le name="id"


//
//Récupère le nb d'éléments ainsi que le nom du bouton tri + série
//
function call (){
	$name_button = $_GET['name'];
	$nbelement = $_GET['nb_element'];

	switch ($name_button) {
	//triee
		case 'btnTribulle_triee':
			$result = tri_a_bulles($nbelement);
			break;
		case 'btnTriFusion_triee':
			$result = tri_fusion($nbelement);
			break;
		case 'btnTriInsertion_triee':
			$result = tri_par_insertion($nbelement);
			break;
		case 'btnTriSelection_triee':
			$result = tri_par_selection($nbelement);
			break;
		case 'btnTriPeigne_triee':
			$result = tri_peigne($nbelement);
			break;
		case 'btnTriRapide_triee':
			$result = tri_rapide($nbelement);
			break;
		case 'btnTriShell_triee':
			$result = tri_shell($nbelement);
			break;

	//inverser
		case 'btnTribulle_inverse':
			$result = tri_a_bulles($nbelement);
			break;
		case 'btnTriFusion_inverse':
			$result = tri_fusion($nbelement);
			break;
		case 'btnTriInsertion_inverse':
			$result = tri_par_insertion($nbelement);
			break;
		case 'btnTriSelection_inverse':
			$result = tri_par_selection($nbelement);
			break;
		case 'btnTriPeigne_inverse':
			$result = tri_peigne(($nbelement);
			break;
		case 'btnTriRapide_inverse':
			$result = tri_rapide($nbelement);
			break;
		case 'btnTriShell_inverse':
			$result = tri_shell($nbelement);
			break;

	//random
		case 'btnTribulle_random':
			$result = tri_a_bulles($nbelement);
			break;
		case 'btnTriFusion_random':
			$result = tri_fusion($nbelement);
			break;
		case 'btnTriInsertion_random':
			$result = tri_par_insertion($nbelement);
			break;
		case 'btnTriSelection_random':
			$result = tri_par_selection($nbelement);
			break;
		case 'btnTriPeigne_random':
			$result = tri_peigne(($nbelement);
			break;
		case 'btnTriRapide_random':
			$result = tri_rapide($nbelement);
			break;
		case 'btnTriShell_random':
			$result = tri_shell($nbelement);
			break;

	//Quasi
		case 'btnTribulle_quasi':
			$result = tri_a_bulles($nbelement);
			break;
		case 'btnTriFusion_quasi':
			$result = tri_fusion($nbelement);
			break;
		case 'btnTriInsertion_quasi':
			$result = tri_par_insertion($nbelement);
			break;
		case 'btnTriSelection_quasi':
			$result = tri_par_selection($nbelement);
			break;
		case 'btnTriPeigne_quasi':
			$result = tri_peigne(($nbelement);
			break;
		case 'btnTriRapide_quasi':
			$result = tri_rapide($nbelement);
			break;
		case 'btnTriShell_quasi':
			$result = tri_shell($nbelement);
			break;

	//multi
		case 'btnTribulle_multi':
			$result = tri_a_bulles($nbelement);
			break;
		case 'btnTriFusion_multi':
			$result = tri_fusion($nbelement);
			break;
		case 'btnTriInsertion_multi':
			$result = tri_par_insertion($nbelement);
			break;
		case 'btnTriSelection_multi':
			$result = tri_par_selection($nbelement);
			break;
		case 'btnTriPeigne_multi':
			$result = tri_peigne(($nbelement);
			break;
		case 'btnTriRapide_multi':
			$result = tri_rapide($nbelement);
			break;
		case 'btnTriShell_multi':
			$result = tri_shell($nbelement);
			break;

	//medium
		case 'btnTribulle_medium':
			$result = tri_a_bulles($nbelement);
			break;
		case 'btnTriFusion_medium':
			$result = tri_fusion($nbelement);
			break;
		case 'btnTriInsertion_medium':
			$result = tri_par_insertion($nbelement);
			break;
		case 'btnTriSelection_medium':
			$result = tri_par_selection($nbelement);
			break;
		case 'btnTriPeigne_medium':
			$result = tri_peigne($nbelement);
			break;
		case 'btnTriRapide_medium':
			$result = tri_rapide($nbelement);
			break;
		case 'btnTriShell_medium':
			$result = tri_shell($nbelement);
			break;
	}
	return $result;
}

function changebtn_tbx($result){
	//supprime btn et ajoute du $result a la place
}

?>