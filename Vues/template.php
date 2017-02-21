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

<?php echo '<script type="text/javascript">var jArray = '. json_encode($phpArray) .';</script>' ?>;


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
var colorName = colorNames[horizontalBarChartData.datasets.length % colorNames.length];
    var dsColor = window.chartColors[colorName];
    var newDataset = {
        label: 'peigne',
        data: jArray[0],
        backgroundColor: 'yellow'
    };
    horizontalBarChartData.datasets.push(newDataset);
window.myHorizontalBar.update();


}

/*function validation()
{
	//console.log("inside validation => template.php");
	var jArray= JSON.Parse('<?php echo json_encode($phpArray ); ?>');
	return add_time(jArray);
	/*for(var i=0;i<5;i++){
        alert(jArray[i]);
    }*

    /var colorName = colorNames[horizontalBarChartData.datasets.length % colorNames.length];;
	    var dsColor = window.chartColors[colorName];
	    var newDataset = {
	        label: 'peigne',
	        data: jarray[0],
	        backgroundColor: 'yellow'
	    };
	    horizontalBarChartData.datasets.push(newDataset);
	   window.myHorizontalBar.update();

}*/
</script>