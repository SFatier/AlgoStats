<?php

function tri_par_selection($t){
	$cpt=count($t);
	for($i=0;$i<$cpt-1;$i++) {
		$min=$i;
		for($j=$i+1;$j<$cpt;$j++) {
			if($t[$j]<$t[$min]) $min=$j;
		}
		if($min!=$i) {
			$temp=$t[$min];
			$t[$min]=$t[$i];
			$t[$i]=$temp;
		}
		for($j=0;$j<$cpt;$j++) echo $t[$j]." ";
		echo "<br />";
	}
}
?>
