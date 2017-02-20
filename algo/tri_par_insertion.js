<?php
function tri_par_insertion($liste){
	$cpt = 0; //declaration nb cycle

	for ($i=1; $i < count($liste); $i++) {
		$ret = $liste[$i];
		for ($j=$i; ($liste[$j] > $liste[$j+1] and $j > 0); $j--) {
			$liste[$j] = $liste[$j+1];
			$liste[$j+1] = $ret;
			$cpt++; //compte le nb de cycle
		}
	}

	$result = array();
	$result[0]= $liste;
	$result[1]= $cpt; //nb de cycle 

	return $result; 	 //tab de tab avec nb cycle en $result[1]

}
?>