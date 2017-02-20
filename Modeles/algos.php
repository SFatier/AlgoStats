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
function fusion($tab1, $tab2)
    {
  		$time_start = microtime(true);

        $taille_g=count($tab1);
        $taille_d=count($tab2);
        $i_g=0;
        $i_d=0;
        
        for($i = 0; $i_g < $taille_g && $i_d < $taille_d; $i++) {
            if($tab1[$i_g] <= $tab2[$i_d])
                $res[$i] = $tab1[$i_g++];
            else
                $res[$i] = $tab2[$i_d++];
        }
        while($i_g < $taille_g) {
            $res[$i++] = $tab1[$i_g++];
        }
        while($i_d<$taille_d) {
            $res[$i++] = $tab2[$i_d++];
        }
        
		$time_end = microtime(true);
	    $time = $time_end - $time_start;

    	$result = array();
		$result[0]= $res;
		$result[1]= null; //nb de cycle 
		$result[2] = $time;
		return $result;			
    }
     
function copie($tab, $debut, $fin)
    {
        for($i = $debut; $i <= $fin; $i++) {
            $res[$i-$debut]=$tab[$i];
        }
        return $res;
    }
 
function tri_fusion($tab)
    {
        $taille = count($tab);
        if($taille <= 1) {
            return $tab;
        } else {
            $mileu = $taille/2;
            $gauche = copie($tab,0,(int)$mileu-1);
            $droite = copie($tab,(int)$mileu,$taille-1);
            return fusion(tri_fusion($gauche),tri_fusion($droite));
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

