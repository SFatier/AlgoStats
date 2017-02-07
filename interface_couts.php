<!DOCTYPE html>
<html>
<head>
	<title>Couts des algorithmes de tri</title>
	<script type="text/javascript" src="call_algo.js"></script>
	<script type="text/javascript" src="algorithms.js"></script>
	<script type="text/javascript" src="validation.js"></script>
</head>
<body>

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
			<td><input type="submit" name="btnTriInsertion_triee" onclick="call()" /></td>
			<td><input type="submit" name="btnTriInsertion_inverse" onclick="call()" /></td>
			<td><input type="submit" name="btnTriInsertion_random" onclick="call()" /></td>
			<td><input type="submit" name="btnTriInsertion_quasi" onclick="call()" /></td>
			<td><input type="submit" name="btnTriInsertion_multi" onclick="call()" /></td>
			<td><input type="submit" name="btnTriInsertion_medium" onclick="call()" /></td>
		</tr>
		<tr>
			<th>Tri par sélection</th>
			<td><input type="submit" name="btnTriSelection_triee" onclick="call()" /></td>
			<td><input type="submit" name="btnTriSelection_inverse" onclick="call()" /></td>
			<td><input type="submit" name="btnTriSelection_random" onclick="call()" /></td>
			<td><input type="submit" name="btnTriSelection_quasi" onclick="call()" /></td>
			<td><input type="submit" name="btnTriSelection_multi" onclick="call()" /></td>
			<td><input type="submit" name="btnTriSelection_medium" onclick="call()" /></td>
		</tr>
		<tr>
			<th>Tri à bulles</th>
			<td><input type="submit" name="btnTribulle_triee" onclick="call()" /></td>
			<td><input type="submit" name="btnTribulle_inverse" onclick="call()" /></td>
			<td><input type="submit" name="btnTribulle_random" onclick="call()" /></td>
			<td><input type="submit" name="btnTribulle_quasi" onclick="call()" /></td>
			<td><input type="submit" name="btnTribulle_multi" onclick="call()" /></td>
			<td><input type="submit" name="btnTribulle_medium" onclick="call()" /></td>
		</tr>
		<tr>
			<th>Tri de Shell</th>
			<td><input type="submit" name="btnTriShell_triee" onclick="call()" /></td>
			<td><input type="submit" name="btnTriShell_inverse" onclick="call()" /></td>
			<td><input type="submit" name="btnTriShell_random" onclick="call()" /></td>
			<td><input type="submit" name="btnTriShell_quasi" onclick="call()" /></td>
			<td><input type="submit" name="btnTriShell_multi" onclick="call()" /></td>
			<td><input type="submit" name="btnTriShell_medium" onclick="call()" /></td>
		</tr>
		<tr>
			<th>Tri fusion</th>
			<td><input type="submit" name="btnTriFusion_triee" onclick="call()" /></td>
			<td><input type="submit" name="btnTriFusion_inverse" onclick="call()" /></td>
			<td><input type="submit" name="btnTriFusion_random" onclick="call()" /></td>
			<td><input type="submit" name="btnTriFusion_quasi" onclick="call()" /></td>
			<td><input type="submit" name="btnTriFusion_multi" onclick="call()" /></td>
			<td><input type="submit" name="btnTriFusion_medium" onclick="call()" /></td>
		</tr>
		<tr>
			<th>Tri rapide</th>
			<td><input type="submit" name="btnTriRapide_triee" onclick="call()" /></td>
			<td><input type="submit" name="btnTriRapide_inverse" onclick="call()" /></td>
			<td><input type="submit" name="btnTriRapide_random" onclick="call()" /></td>
			<td><input type="submit" name="btnTriRapide_quasi" onclick="call()" /></td>
			<td><input type="submit" name="btnTriRapide_multi" onclick="call()" /></td>
			<td><input type="submit" name="btnTriRapide_medium" onclick="call()" /></td>
		</tr>
		<tr>
			<th>Tri à peigne</th>
			<td><input type="submit" name="btnTriPeigne_triee" onclick="call()" /></td>
			<td><input type="submit" name="btnTriPeigne_inverse" onclick="call()" /></td>
			<td><input type="submit" name="btnTriPeigne_random" onclick="call()" /></td>
			<td><input type="submit" name="btnTriPeigne_quasi" onclick="call()" /></td>
			<td><input type="submit" name="btnTriPeigne_multi" onclick="call()" /></td>
			<td><input type="submit" name="btnTriPeigne_medium" onclick="call()" /></td>
		</tr>
	</table>
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
</script>
</body>
</html>