<?php
function tri_shell($t){
	$n=0;
	$cpt=count($t);
	while($n<$cpt) $n=3*$n+1;
	while($n!=0) {
		$n=(int)($n/3);
		for($i=$n;$i<$cpt;$i++) {
			$mem=$t[$i];
			$j=$i;
			while($j>($n-1) && $t[$j-$n]>$mem) {
				$t[$j]=$t[$j-$n];
				$j=$j-$n;
			}
			$t[$j]=$mem;
		}
	}
	
	$result = array();
	$result[0]= $t;
	$result[1]= $cpt; //nb de cycle 

	return $result; 	 //tab de tab avec nb cycle en $result[1]
}
?>
