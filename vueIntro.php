<?php $title = 'Mon Blog'; ?>
<?php ob_start(); ?>
<div>
	<form method="get">
		<button name="stats" type="submit" value="couts">Couts</button>
		<button name="stats" type="submit" value="temps">Stats</button>
	</form>
</div>
<?php $content = ob_get_clean(); ?>
<?php require 'template.php'; ?>
