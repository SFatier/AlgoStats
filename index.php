<?php
switch ($_GET['stats']) {
	case 'couts':
		require('vueCouts.php');
		break;
	case 'temps':
		require('vueTemps.php');
		break;
	default:
		require('vueIntro.php');
		break;
}
