<?php
function tri_fusion (&$tab, $debut, $fin){
	if($debut<$fin) {
		$milieu = round(($debut+$fin)/2,0, PHP_ROUND_HALF_DOWN);
		tri_fusion($tab, $debut, $milieu);
		tri_fusion($tab, $milieu+1, $fin);
		fusionner($tab, $debut, $milieu, $fin);
	}
}
