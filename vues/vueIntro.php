<?php $title = 'Home'; ?>
<?php ob_start(); ?>
<div>
	<h1>Bienvenue !</h1>
</div>
<canvas id="canvas"></canvas>
<?php $content = ob_get_clean(); ?>
<?php require 'template.php'; ?>
