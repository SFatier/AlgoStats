<?php
require('models/listGen.php');
require('models/algorithms.php');
require('models/modeles.php');
if (isset($_GET['stats'])) {
	switch ($_GET['stats']) {
		case 'couts':
			require('vues/vueCouts.php');
			break;
		case 'temps':
			require('vues/vueTemps.php');
			break;
		default:
			require('vues/vueIntro.php');
			break;
	}
}else{
	require('vues/vueIntro.php');
}
