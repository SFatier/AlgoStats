<?php
function list_rangee($size){
	$list = array();
	for ($i = 0; $i < $size; $i++)
		$list[$i] = $i;
	return $list;
}
function list_invert($size){
	$list = array();
	for ($i = 0; $i < $size; $i++)
		$list[$i] = $size - $i;
	return $list;
}
function list_random($size){
	$list = array();
	for ($i = 0; $i < $size; $i++)
		$list[$i] = rand(0, $size);
	return $list;
}
function list_quasie($size){
	$list = array();
	for ($i = 0; $i < $size/2; $i++){
		$list[2 * $i] = 2 * $i;
		$list[2 * $i + 1] = rand(0, $size);
	}
	return $list;
}
function list_multie($size){
	$list = array();
	$temp = array();
	for ($i = 0; $i < $size/2; $i++)
		$temp[$i] = rand(0, $size);
	for ($i=0; $i < $size; $i++)
		$list[$i] = array_rand($temp);
	return $list;
}
function list_medium($size, $table){
	$list = array_fill(0, $size, 0); 
	foreach ($table as $k => $piste) {
		foreach ($piste as $id => $value) {
			$list[$id] += $value;
		}
	}
	$len = count($list);
	for ($i=0; $i < $size; $i++)
		$list[$i] /= $len;
	return $list;
}
