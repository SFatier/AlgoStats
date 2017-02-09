<?php
$selfAlgo = ['insert', 'bulles', 'select', 'shell', 'fusion', 'peigne'];
$selfList = ['rangee', 'invert', 'random', 'quasi', 'multie', 'medium'];
if (isset($_GET['size'])) {
	$size = $_GET['size'];
	$listes = array('rangee' => list_rangee($size),
					'invert' => list_invert($size),
					'random' => list_random($size),
					'quasie' => list_quasie($size),
					'multie' => list_multie($size),
				);
	$listes['medium'] = list_medium($size, $listes);
	var_dump($listes);
}
