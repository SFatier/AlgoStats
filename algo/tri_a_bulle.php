<?php
function tri_a_bulles($t){
	$Permut=true;
	$cpt=count($t)-1;
	while($Permut) {
		for($i=0;$i<count($t);$i++) echo $t[$i]." ";
		echo "<br />";
		echo "->";
		$Permut=false;
		for($i=0;$i<$cpt;$i++) {
			if($t[$i]>$t[$i+1]) {
				$temp=$t[$i];
				$t[$i]=$t[$i+1];
				$t[$i+1]=$temp;
				$Permut=true;
			}
		}
		$cpt--;
		for($i=0;$i<count($t);$i++) echo $t[$i]." ";
		echo "<br />";
	}
}
