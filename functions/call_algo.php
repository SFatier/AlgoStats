<?php
//$_GET['id'] <- recupere le button avec le name="id"


//
//Récupère le nb d'éléments ainsi que le nom du bouton tri + série
//
function call ($name_button, $nbelement){
	switch ($name_button) {
		//triee
	    case btnTribulle_triee:
	        tri_a_bulles($nbelement);
	        break;
	    case btnTriFusion_triee:
	        tri_fusion($nbelement);
	        break;
	    case btnTriInsertion_triee:
	        tri_par_insertion($nbelement);
	        break;
	    case btnTriSelection_triee:
	        tri_par_selection($nbelement);
	        break;
	    case btnTriPeigne_triee:
	        tri_peigne(($nbelement);
	        break;
	    case btnTriRapide_triee:
			tri_rapide($nbelement);
	        break;
	    case btnTriShell_triee:
			tri_shell($nbelement);
	        break;

	    //inverser
	    case btnTribulle_inverse:
	        tri_a_bulles($nbelement);
	        break;
	    case btnTriFusion_inverse:
	        tri_fusion($nbelement);
	        break;
	    case btnTriInsertion_inverse:
	        tri_par_insertion($nbelement);
	        break;
	    case btnTriSelection_inverse:
	        tri_par_selection($nbelement);
	        break;
	    case btnTriPeigne_inverse:
	        tri_peigne(($nbelement);
	        break;
	    case btnTriRapide_inverse:
			tri_rapide($nbelement);
	        break;
	    case btnTriShell_inverse:
			tri_shell($nbelement);
	        break;

	    //random
	    case btnTribulle_random:
	        tri_a_bulles($nbelement);
	        break;
	    case btnTriFusion_random:
	        tri_fusion($nbelement);
	        break;
	    case btnTriInsertion_random:
	        tri_par_insertion($nbelement);
	        break;
	    case btnTriSelection_random:
	        tri_par_selection($nbelement);
	        break;
	    case btnTriPeigne_random:
	        tri_peigne(($nbelement);
	        break;
	    case btnTriRapide_random:
			tri_rapide($nbelement);
	        break;
	    case btnTriShell_random:
			tri_shell($nbelement);
	        break;    

	    //Quasi
	    case btnTribulle_quasi:
	        tri_a_bulles($nbelement);
	        break;
	    case btnTriFusion_quasi:
	        tri_fusion($nbelement);
	        break;
	    case btnTriInsertion_quasi:
	        tri_par_insertion($nbelement);
	        break;
	    case btnTriSelection_quasi:
	        tri_par_selection($nbelement);
	        break;
	    case btnTriPeigne_quasi:
	        tri_peigne(($nbelement);
	        break;
	    case btnTriRapide_quasi:
			tri_rapide($nbelement);
	        break;
	    case btnTriShell_quasi:
			tri_shell($nbelement);
	        break; 

	    //multi
	     case btnTribulle_multi:
	        tri_a_bulles($nbelement);
	        break;
	    case btnTriFusion_multi:
	        tri_fusion($nbelement);
	        break;
	    case btnTriInsertion_multi:
	        tri_par_insertion($nbelement);
	        break;
	    case btnTriSelection_multi:
	        tri_par_selection($nbelement);
	        break;
	    case btnTriPeigne_multi:
	        tri_peigne(($nbelement);
	        break;
	    case btnTriRapide_multi:
			tri_rapide($nbelement);
	        break;
	    case btnTriShell_multi:
			tri_shell($nbelement);
	        break;    	    

	    //medium
	     case btnTribulle_medium:
	        tri_a_bulles($nbelement);
	        break;
	    case btnTriFusion_medium:
	        tri_fusion($nbelement);
	        break;
	    case btnTriInsertion_medium:
	        tri_par_insertion($nbelement);
	        break;
	    case btnTriSelection_medium:
	        tri_par_selection($nbelement);
	        break;
	    case btnTriPeigne_medium:
	        tri_peigne($nbelement);
	        break;
	    case btnTriRapide_medium:
			tri_rapide($nbelement);
	        break;
	    case btnTriShell_medium:
			tri_shell($nbelement);
	        break;    	   	
	}
}


?>