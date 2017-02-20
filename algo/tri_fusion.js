<?php
//revoir c'est quoi debut et fin
function tri_fusion (&$tab, $debut, $fin){
	$cpt = 0;
	if($debut<$fin) {
		$milieu = round(($debut+$fin)/2,0, PHP_ROUND_HALF_DOWN);
		tri_fusion($tab, $debut, $milieu);
		tri_fusion($tab, $milieu+1, $fin);
		fusionner($tab, $debut, $milieu, $fin);
		$cpt++;
	}
	$result = array();
	$result[0]= $tab;
	$result[1]= $cpt; //nb de cycle 
	return $result; //tab de tab avec nb cycle en $result[1]
}
