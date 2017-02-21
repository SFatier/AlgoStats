<!DOCTYPE html>
<html>
<head>
	<title><?=$title?></title>
	<link rel="stylesheet" type="text/css" href="Contenu/styles.css">
	<script src="Contenu/dist/jquery.min.js"></script>
	<script src="Contenu/call_algo.js"></script>
	<script src="Contenu/algos.js"></script>
	<script src="Contenu/dist/Chart.bundle.js"></script>
	<script src="Contenu/dist/utils.js"></script>
	<!--<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>-->
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
		<button name="stats" type="submit" value="temps">Temps</button>
	</form>
</div>
<div id="main">

<?=$content?>

<?php echo '<script type="text/javascript">var jArray = '. json_encode($phpArray) .'; var tri = "'. $tri .'";</script>' ?>;


<div id="chart"></div>
</div>
<div id="footer">
	<table class="table" style="margin: 0">
		<tr>
			<td>Fermete Mounanga</td>
			<td>Ségolène Fatier</td>
			<td>Adrian Marandiuc</td>
		</tr>
	</table>
</div>
</body>

<script src="Contenu/charts.js"></script>
<script type="text/javascript"> 

$("#frmChart").submit(function(event) {
    return true;
});

if (jArray && jArray.length > 0) {
	console.log(jArray);
	console.log(tri);
	if (tri == "All")
	{
		var colorName = colorNames[horizontalBarChartData.datasets.length % colorNames.length];
	    var dsColor = window.chartColors[colorName];
	    var Insertion = {
	        label: 'Insertion',
	        data: [jArray[0][0],jArray[1][0],jArray[2][0], jArray[3][0], jArray[4][0], 0],
	        backgroundColor: 'yellow'
	    };
	    var Selection = {
	        label: 'Selection',
	        data: [jArray[0][1],jArray[1][1],jArray[2][1], jArray[3][1], jArray[4][1], 0],
	        backgroundColor: 'green'
	    };
	    var Bulle = {
	        label: 'Bulle',
	        data: [jArray[0][2],jArray[1][2],jArray[2][2], jArray[3][2], jArray[4][2], 0],
	        backgroundColor: 'red'
	    };
	    var Shell = {
	        label: 'Shell',
	        data: [jArray[0][3],jArray[1][3],jArray[2][3], jArray[3][3], jArray[4][3], 0],
	        backgroundColor: 'orange'
	    };
	    var Fusion = {
	        label: 'Fusion',
	        data: [jArray[0][4],jArray[1][4],jArray[2][4], jArray[3][4], jArray[4][4], 0],
	        backgroundColor: 'blue'
	    };
	     var Peigne = {
	        label: 'Peigne',
	        data: [jArray[0][5],jArray[1][5],jArray[2][5], jArray[3][5], jArray[4][5], 0],
	        backgroundColor: 'pink'
	    };
	    var Rapide = {
	        label: 'Rapide',
	        data: [0,0,0, 0,0,0],
	        backgroundColor: 'violet'
	    };
	    horizontalBarChartData.datasets.push(Insertion);
	    horizontalBarChartData.datasets.push(Selection);
	    horizontalBarChartData.datasets.push(Bulle);
	    horizontalBarChartData.datasets.push(Shell);
	    horizontalBarChartData.datasets.push(Fusion);
	    horizontalBarChartData.datasets.push(Peigne);
	    horizontalBarChartData.datasets.push(Rapide);

		//window.myHorizontalBar.update();
	}
}
</script>