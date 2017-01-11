<?php
function tri_par_insertion($liste){
  for ($i=1; $i < count($liste); $i++) {
    $ret = $liste[$i];
    for ($j=$i; ($liste[$j] > $liste[$j+1] and $j > 0); $j--) {
      $liste[$j] = $liste[$j+1];
      $liste[$j+1] = $ret;
    }
  }
  return $liste;
}
?>
