<!DOCTYPE html>
<html>
<head>
	<title><?=$title?></title>
	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="Contenu/styles.css">
	<script src="Contenu/dist/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<script src="Contenu/call_algo.js"></script>
	<script src="Contenu/algorithms.js"></script>
	<script src="Contenu/dist/Chart.bundle.js"></script>
	<script src="Contenu/utils.js"></script>
</head>
<body>
<div id="header">
	<form method="get">
		<select name="size">
			<option value="10">10</option>
			<option value="100">100</option>
			<option value="1000">1000</option>
			<option value="10000">10000</option>
			<input type="submit" value="Changer de liste">
		</select>
	</form>
	<form method="get">
		<button name="stats" type="submit" value="couts">Couts</button>
		<button name="stats" type="submit" value="temps">Stats</button>
	</form>
</div>
<div id="main">
<?=$content?>
</div>
<div id="footer">
	<table class="table">
		<tr>
			<td>Fermete Mounanga</td>
			<td>Ségolène Fatier</td>
			<td>Adrian Marandiuc</td>
		</tr>
	</table>
</div>
</body>
<script src="Contenu/charts.js"></script>