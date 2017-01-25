<?php
function tri_peigne(int* tableau){
	$gap = 20;
	$permutation = true;
	$en_cours;
	while ($permutation or $gap>1){
		$permutation = false;
		$gap = $gap / 1.3;
		if ($gap<1) $gap=1;
		for ($en_cours=0;$en_cours<20-$gap;$en_cours++) {
			if (tableau[$en_cours]>tableau[$en_cours+$gap]){
				$permutation = true;
				// on echange les deux elements
				$temp = tableau[$en_cours];
				tableau[$en_cours] = tableau[$en_cours+$gap];
				tableau[$en_cours+$gap] = temp;
			}
		}
	}
}
?>
