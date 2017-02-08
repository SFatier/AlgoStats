<!DOCTYPE html>
<html>
<head>
	<title><?=$title?></title>
	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/styles.css">
	<script src="js/dist/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<script src="js/call_algo.js"></script>
	<script src="js/algorithms.js"></script>
	<script src="js/dist/Chart.bundle.js"></script>
	<script src="js/utils.js"></script>
	<script src="js/charts.js"></script>
</head>
<body>
<div id="header">
	<form onsubmit="myFunction()">
	<select id="valider">
		<option value="1">10</option>
		<option value="2">100</option>
		<option value="3">1000</option>
		<option value="4">10000</option>
		<input type="submit" name="Changer de listes">
	</select>
	</form>
</div>
<div id="main">
<?=$content?>
</div>
<div id="footer">
	<table class="table">
		<tr>
			<td>Ségolène Fatier</td>
			<td>Fermete Mounanga</td>
			<td>Adrian Marandiuc</td>
		</tr>
	</table>
</div>
</body>