<!DOCTYPE html>
<html>
<head>
	<title>Couts des algorithmes de tri</title>
	<script type="text/javascript" src="call_algo.js"></script>
	<script type="text/javascript" src="algorithms.js"></script>
	<script src="js/dist/Chart.bundle.js"></script>
	<script src="js/dist/jquery.min.js"></script>
    <script src="js/utils.js"></script></head>
    <link rel="stylesheet" href="css/css.css">
<body>



<div id="entete">
 En tête
</div>

<div id="main">

 <div id="contenu">
  <form onsubmit="myFunction()">
	<select id="valider" >
	  <option value="1">10</option>
	  <option value="2">100</option>
	  <option value="3">1000</option>
	  <option value="4">10000</option>
	</select>
	<input type="submit" value="Submit">
</form>

	<table class="" width="100%" align="right">
		<tr>
			<th>Algorithme de tri</th>
			<th>Triée</th>
			<th>Inverse</th>
			<th>Random</th>
			<th>Quasi</th>
			<th>Multi</th>
			<th>Medium</th>
		</tr>
		<tr>
			<th>Tri par insertion</th>
			<td><input type="submit" name="btnTriInsertion_triee" onclick="call()" id="btnAdd" /></td>
			<td><input type="submit" name="btnTriInsertion_inverse" onclick="call()" id="btnAdd" /></td>
			<td><input type="submit" name="btnTriInsertion_random" onclick="call()" id="btnAdd" /></td>
			<td><input type="submit" name="btnTriInsertion_quasi" onclick="call()" id="btnAdd" /></td>
			<td><input type="submit" name="btnTriInsertion_multi" onclick="call()" id="btnAdd" /></td>
			<td><input type="submit" name="btnTriInsertion_medium" onclick="call()" id="btnAdd" /></td>
		</tr>
		<tr>
			<th>Tri par sélection</th>
			<td><input type="submit" name="btnTriSelection_triee" onclick="call()" id="btnAdd" /></td>
			<td><input type="submit" name="btnTriSelection_inverse" onclick="call()" id="btnAdd" /></td>
			<td><input type="submit" name="btnTriSelection_random" onclick="call()" id="btnAdd" /></td>
			<td><input type="submit" name="btnTriSelection_quasi" onclick="call()" id="btnAdd" /></td>
			<td><input type="submit" name="btnTriSelection_multi" onclick="call()" id="btnAdd" /></td>
			<td><input type="submit" name="btnTriSelection_medium" onclick="call()" id="btnAdd" /></td>
		</tr>
		<tr>
			<th>Tri à bulles</th>
			<td><input type="submit" name="btnTribulle_triee" onclick="call()" id="btnAdd" /></td>
			<td><input type="submit" name="btnTribulle_inverse" onclick="call()" id="btnAdd" /></td>
			<td><input type="submit" name="btnTribulle_random" onclick="call()" id="btnAdd" /></td>
			<td><input type="submit" name="btnTribulle_quasi" onclick="call()" id="btnAdd" /></td>
			<td><input type="submit" name="btnTribulle_multi" onclick="call()" id="btnAdd" /></td>
			<td><input type="submit" name="btnTribulle_medium" onclick="call()" id="btnAdd" /></td>
		</tr>
		<tr>
			<th>Tri de Shell</th>
			<td><input type="submit" name="btnTriShell_triee" onclick="call()" id="btnAdd" /></td>
			<td><input type="submit" name="btnTriShell_inverse" onclick="call()" id="btnAdd" /></td>
			<td><input type="submit" name="btnTriShell_random" onclick="call()" id="btnAdd" /></td>
			<td><input type="submit" name="btnTriShell_quasi" onclick="call()" id="btnAdd" /></td>
			<td><input type="submit" name="btnTriShell_multi" onclick="call()" id="btnAdd" /></td>
			<td><input type="submit" name="btnTriShell_medium" onclick="call()" id="btnAdd" /></td>
		</tr>
		<tr>
			<th>Tri fusion</th>
			<td><input type="submit" name="btnTriFusion_triee" onclick="call()" id="btnAdd" /></td>
			<td><input type="submit" name="btnTriFusion_inverse" onclick="call()" id="btnAdd" /></td>
			<td><input type="submit" name="btnTriFusion_random" onclick="call()" id="btnAdd" /></td>
			<td><input type="submit" name="btnTriFusion_quasi" onclick="call()" id="btnAdd" /></td>
			<td><input type="submit" name="btnTriFusion_multi" onclick="call()" id="btnAdd" /></td>
			<td><input type="submit" name="btnTriFusion_medium" onclick="call()" id="btnAdd" /></td>
		</tr>
		<tr>
			<th>Tri rapide</th>
			<td><input type="submit" name="btnTriRapide_triee" onclick="call()" id="btnAdd" /></td>
			<td><input type="submit" name="btnTriRapide_inverse" onclick="call()" id="btnAdd" /></td>
			<td><input type="submit" name="btnTriRapide_random" onclick="call()" id="btnAdd" /></td>
			<td><input type="submit" name="btnTriRapide_quasi" onclick="call()" id="btnAdd" /></td>
			<td><input type="submit" name="btnTriRapide_multi" onclick="call()" id="btnAdd" /></td>
			<td><input type="submit" name="btnTriRapide_medium" onclick="call()" id="btnAdd" /></td>
		</tr>
		<tr>
			<th>Tri à peigne</th>
			<td><input type="submit" name="btnTriPeigne_triee" onclick="call()" id="btnAdd" /></td>
			<td><input type="submit" name="btnTriPeigne_inverse" onclick="call()" id="btnAdd" /></td>
			<td><input type="submit" name="btnTriPeigne_random" onclick="call()" id="btnAdd" /></td>
			<td><input type="submit" name="btnTriPeigne_quasi" onclick="call()" id="btnAdd" /></td>
			<td><input type="submit" name="btnTriPeigne_multi" onclick="call()" id="btnAdd" /></td>
			<td><input type="submit" name="btnTriPeigne_medium" onclick="call()" id="btnAdd" /></td>
		</tr>
	</table>

<div id="container" style="width: 75%;">
        <canvas id="canvas"></canvas>
    </div>

 </div>

</div>

<div id="footer">
 Pied de Page
</div>



<script>
function myFunction() {
	try
	{
		var e = document.getElementById("valider");
	    var rst = e.options[e.selectedIndex].value;
	    alert(rst);
	    sessionStorage.setItem("rst", rst); 
	}catch(e){
		console.log("Je ne trouve pas la fonction");
	}
}

        var color = Chart.helpers.color;
        var barChartData = {
            
            datasets: [{
                label: 'test',
                backgroundColor: color(window.chartColors.red).alpha(0.5).rgbString(),
                borderColor: window.chartColors.red,
                borderWidth: 1,
                data: [
                ]
            }]

        };

        window.onload = function() {
            var ctx = document.getElementById("canvas").getContext("2d");
            window.myBar = new Chart(ctx, {
                type: 'bar',
                data: barChartData,
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

        /*document.getElementById('btnAdd').addEventListener('click',*/
        function add (rst) {
            if (barChartData.datasets.length > 0) {
                var month = rst[2];
                barChartData.labels.push(month);

                for (var index = 0; index < barChartData.datasets.length; ++index) {
                    //window.myBar.addData(randomScalingFactor(), index);
                    barChartData.datasets[index].data.push(rst[1]);
                }
                window.myBar.update();
            }
        }
    </script>
</body>
</html>