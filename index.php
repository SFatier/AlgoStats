<?php
require('Modeles/modeles.php');
if (isset($_GET['stats'])) {
	switch ($_GET['stats']) {
		case 'couts':
			require('Vues/vueCouts.php');
			break;
		case 'temps':
			require('Vues/vueTemps.php');
			break;
		default:
			require('Vues/vueIntro.php');
			break;
	}
}else{
	require('Vues/vueIntro.php');
}
require('Vues/template.php');
