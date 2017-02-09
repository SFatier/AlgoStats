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
<script>
	var color = Chart.helpers.color;
	var data = {
		labels: ['triee', 'inverse', 'random', 'quasi', 'multi', 'medium'],
		datasets: [
			{
				label: 'Insertion',
				type: bar,
				data: [],
				backgroundColor: color(window.chartColors.red).alpha(0.5).rgbString(),
			},
			{
				label: 'Bulle',
				type: bar,
				data: [],
				backgroundColor: color(window.chartColors.red).alpha(0.5).rgbString(),
			}
		]
	};
	window.onload = function() {
		var ctx = document.getElementById("canvas").getContext("2d");
		window.triee = new Chart(ctx, {
			type: 'bar',
			data: triee,
			options: {
				responsive: true,
				legend: {
					position: 'top',
				},
				title: {
					display: true,
					text: 'Graphique Triée'
				}
			}
		});
	};
</script>
<script src="js/charts.js"></script>