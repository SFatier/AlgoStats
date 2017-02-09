<?php
function tri_par_insertion($tab){
	$cpt = count($tab);
	for ($i=0; $i < $cpt; $i++) { 
		$mem=$tab[$i];
		$pos=$i-1;
		while(($pos>=0) && ($tab[$pos]>mem)) {
			$tab[$pos+1]=$tab[$pos];
			$pos--;
		}
		$tab[$pos+1]=$mem;
	}

	$result = array();
	$result[0] = $tab;
	$result[1] = $i;
	return ($result);
}

function tri_a_bulles($tab){
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
	var_dump($tab);
	$result = array();
	$result[0]= $tab;
	$result[1]= $cpt; //nb de cycle 
	return $result; //tab de tab avec nb cycle en result[1]
}

function tri_par_selection($tab){
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
	var_dump($tab);
	$result = array();
	$result[0]= $tab;
	$result[1]= $cpt; //nb de cycle 

	return $result; 	 //tab de tab avec nb cycle en result[1]
}

function tri_shell($tab){
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
	var_dump($tab);
	$result = array();
	$result[0]= $tab;
	$result[1]= $cpt; //nb de cycle 

	return $result; 	 //tab de tab avec nb cycle en result[1]
}

function tri_fusion ($tab){
	$cpt=count($tab);
	$j = 0;
	if( $cpt <= 1 ){
		return;	
	} else {
		$tab1 = array();
		$tab2 = array();
		for( $i = 0; $i < $cpt; $i++) {
			if( $i < $cpt / 2 )
				$tab1[$j] = $tab[$i];
			else
				$tab2[$j] = $tab[$i];
			$j++;
		}
		// Appel la fonction tri récursivement
		tri_fusion($tab1);
		tri_fusion($tab2);
		// Fusionne les petits $tableaux en plus grand
		fusionner($tab1,$tab2,$tab);
	}
	$result = array();
	$result[0]= $tab;
	$result[1]= $cpt; //nb de cycle 
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

function tri_peigne($tab){
	$gap = count($tab);
	$permutation = true;

	$cpt = 0; //declaration nb cycle

	while ($permutation || $gap > 1) {
		$permutation = false;
		$gap = $gap / 1.3;
		if ($gap<1) {$gap=1 ; }
		for ($en_cours=0;$en_cours<20-$gap;$en_cours++) {
			if ($tab[$en_cours]>$tab[$en_cours+$gap]) {
				$permutation = true;
				$temp = $tab[$en_cours];
				$tab[$en_cours] = $tab[$en_cours+$gap];
				$tab[$en_cours+$gap] = $temp;
			}
			$cpt++; //nb cycle
		}
	}
	$result = array();
	$result[0]= $tab;
	$result[1]= $cpt; //nb de cycle 
	return $result; //tableau de tableaux avec nb cycle en result[1]
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
	return array_merge(static::triRapide($left), array($pivot_key => $pivot), static::triRapide($right));
}
