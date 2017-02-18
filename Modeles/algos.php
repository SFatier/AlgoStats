<?php
function tri_par_insertion($tab){
	$time_start = microtime(true);
	$cpt = count($tab);
	for ($i=0; $i < $cpt; $i++) { 
		$mem=$tab[$i];
		$pos=$i-1;
		while(($pos>=0) && ($tab[$pos]> $mem)) {
			$tab[$pos+1]=$tab[$pos];
			$pos--;
		}
		$tab[$pos+1]=$mem;
	}
	$time_end = microtime(true);
    $time = $time_end - $time_start;

	$result = array();
	$result[0] = $tab;
	$result[1] = $i;
	$result[2] = $time;
	return ($result);
}
function tri_par_selection($tab){
	$time_start = microtime(true);
	$cpt=count($tab);
	for ($i=0; $i < $cpt; $i++) { 
		$min=$i;
		for($j=$i+1;$j<$cpt;$j++) {
			if($tab[$j]<$tab[$min]) $min=$j;
		}
		if($min!=$i) {
			$tabemp=$tab[$min];
			$tab[$min]=$tab[$i];
			$tab[$i]=$tabemp;
		}
	}
	$time_end = microtime(true);
    $time = $time_end - $time_start;
	
	$result = array();
	$result[0]= $tab;
	$result[1]= $cpt; //nb de cycle 
	$result[2] = $time;

	return $result; 	 //tab de tab avec nb cycle en result[1]
}
function tri_a_bulles($tab){
	$time_start = microtime(true);
	$permut=true;
	$cpt = (count($tab)) - 1;
	while($permut) {
		$permut=false;
		for ($i=0; $i < $cpt; $i++) { 
			if($tab[$i]>$tab[$i+1]) {
				$tabemp=$tab[$i];
				$tab[$i]=$tab[$i+1];
				$tab[$i+1]=$tabemp;
				$permut=true;
			}
		}
		$cpt--;
	}
	$time_end = microtime(true);
    $time = $time_end - $time_start;

	$result = array();
	$result[0]= $tab;
	$result[1]= $cpt; //nb de cycle 
	$result[2] = $time;
	return $result; //tab de tab avec nb cycle en result[1]
}
function tri_shell($tab){
	$time_start = microtime(true);
	$n=0;
	$cpt=count($tab);
//	while($n<$cpt) {$n*=3;$n+=1};
	while($n!=0) {
		$n=parseInt($n/3);
		for($i=$n;$i<$cpt;$i++) {
			$mem=$tab[$i];
			$j=$i;
			while($j>($n-1) && $tab[$j-$n]>$mem) {
				$tab[$j]=$tab[$j-$n];
				$j=$j-$n;
			}
			$tab[$j]=$mem;
		}
	}
	$time_end = microtime(true);
    $time = $time_end - $time_start;

	$result = array();
	$result[0]= $tab;
	$result[1]= $cpt; //nb de cycle 
	$result[2] = $time;

	return $result; 	 //tab de tab avec nb cycle en result[1]
}
function tri_fusion ($tab){
	$time_start = microtime(true);
	$cpt=count($tab);
	if( $cpt <= 1 ){
		return;	
	} else {
		$tab1 = array();
		$tab2 = array();
		for( $i = 0; $i < $cpt; $i++) {
			if( $i < $cpt / 2 )
				$tab1[$i] = $tab[$i];
			else
				$tab2[$i] = $tab[$i];
		}
		// Appel la fonction tri récursivement
		tri_fusion($tab1);
		tri_fusion($tab2);
		// Fusionne les petits $tableaux en plus grand
		fusionner($tab1,$tab2,$tab);
	}
	$time_end = microtime(true);
    $time = $time_end - $time_start;

	$result = array();
	$result[0]= $tab;
	$result[1]= $cpt; //nb de cycle
	$result[2] = $time; 
	return $result; //tab de tab avec nb cycle en result[1]
}
function fusionner ( $tab1, $tab2, $tab ){
	$i = 0;
	$i1 = $i2 = 0;
	$cpt1 = count($tab1);
	$cpt2 = count($tab2);
	// Fusionne les petits $tableaux dans le plus grand
	while( $i1 < $cpt1 && $i2 < $cpt2 ) {
		if( $tab1[$i1] < $tab2[$i2] ) // On compare ici
			$tab[$i] = $tab1[$i1++];
		else
			$tab[$i] = $tab2[$i2++];
		$i++;
	}
	// S'il reste des éléments dans un des 2 $tableaux mais pas dans l'autre
	while( $i1 < count($tab1)) {
		$tab[$i] = $tab1[$i1++];
		$i++;
	}
	while($i2 < $tab2) {
		$tab[$i] = $tab2[$i2++];
		$i++;
	}
}
function tri_rapide($tab){
	if(count($tab) < 2 )
		return $tab;
	$left = $right = array();
	$tab = [];
	$pivot_key  = Object.keys( $tab );
	$pivot  = $tab.shift();
	foreach( $tab as $k => $v ) {
		if( $v < $pivot )
			$left[$k] = $v;
		else
			$right[$k] = $v;
	}
//	return array_merge(static::triRapide($left), array($pivot_key => $pivot), static::triRapide($right));
}
function tri_peigne($tableau){
	$time_start = microtime(true);
	$gap = count($tableau);
	$permutation = true;
	$cpt = 0;
    $gap = count($tableau);
    $swap = true;
    while ($gap > 1 || $swap){
        if($gap > 1) $gap /= 1.25;
        $swap = false;
        $i = 0;
        while($i+$gap < count($tableau)){
            if($tableau[$i] > $tableau[$i+$gap]){
                list($tableau[$i], $tableau[$i+$gap]) = array($tableau[$i+$gap],$tableau[$i]);
                $swap = true;
            }
            $i++;
        }
        $cpt++;
    }

	$time_end = microtime(true);
    $time = $time_end - $time_start;

	$result = array();
	$result[0]= $tableau;
	$result[1]= $cpt; //nb de cycle 
	$result[2] = $time;
	return $result; //tableau de tableaux avec nb cycle en result[1]
}
