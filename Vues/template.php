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
	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
<div id="header">
	
	<form method="get">
		<button name="stats" type="submit" value="couts">Couts</button>
		<button name="stats" type="submit" value="temps">Temps</button>
	</form>
</div>
<div id="main">

<?=$content?>
<?php  if ($phpArray != '' && count($phpArray) > 0 && $first)
	echo '<script type="text/javascript">var jArray = '. json_encode($phpArray) .'; var first = "'. $first .'" ;</script>';
?>;
<?php if ($name != '' && count($name) > 0)
	echo '<script type="text/javascript">var name = '. json_encode($name) .';</script>' 
?>;

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
try {
	if (jArray && jArray.length > 0) 
	{
		if (first == "All")
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
		}else{
			array = jArray;
			var tab_length = array.length;
			console.log(name);
			var i = 0;
			while(i < tab_length){
				var label = name[i];
				console.log(label);
				var hue = 'rgb(' + (Math.floor(Math.random() * 256)) + ',' + (Math.floor(Math.random() * 256)) + ',' + (Math.floor(Math.random() * 256)) + ')';
				var tab = {
			        label: label,
			        data: array[i],
			        backgroundColor: hue
		    	};
		    	horizontalBarChartData.datasets.push(tab);
				i++;
			}
		}
	}
}catch(e){
	console.log("=> Le graphique est vide, si vous n'avez pas encore checked une ou des checkbox");
}
</script>