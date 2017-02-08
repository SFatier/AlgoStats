<?php $title = 'Mon Blog'; ?>
<?php ob_start(); ?>
	<table class="table" width="100%" align="right">
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
			<td><input type="submit" name="btnTriInsertion_triee" onclick="call()" class="chart" /></td>
			<td><input type="submit" name="btnTriInsertion_inverse" onclick="call()" class="chart" /></td>
			<td><input type="submit" name="btnTriInsertion_random" onclick="call()" class="chart" /></td>
			<td><input type="submit" name="btnTriInsertion_quasi" onclick="call()" class="chart" /></td>
			<td><input type="submit" name="btnTriInsertion_multi" onclick="call()" class="chart" /></td>
			<td><input type="submit" name="btnTriInsertion_medium" onclick="call()" class="chart" /></td>
		</tr>
		<tr>
			<th>Tri par sélection</th>
			<td><input type="submit" name="btnTriSelection_triee" onclick="call()" class="chart" /></td>
			<td><input type="submit" name="btnTriSelection_inverse" onclick="call()" class="chart" /></td>
			<td><input type="submit" name="btnTriSelection_random" onclick="call()" class="chart" /></td>
			<td><input type="submit" name="btnTriSelection_quasi" onclick="call()" class="chart" /></td>
			<td><input type="submit" name="btnTriSelection_multi" onclick="call()" class="chart" /></td>
			<td><input type="submit" name="btnTriSelection_medium" onclick="call()" class="chart" /></td>
		</tr>
		<tr>
			<th>Tri à bulles</th>
			<td><input type="submit" name="btnTribulle_triee" onclick="call()" class="chart" /></td>
			<td><input type="submit" name="btnTribulle_inverse" onclick="call()" class="chart" /></td>
			<td><input type="submit" name="btnTribulle_random" onclick="call()" class="chart" /></td>
			<td><input type="submit" name="btnTribulle_quasi" onclick="call()" class="chart" /></td>
			<td><input type="submit" name="btnTribulle_multi" onclick="call()" class="chart" /></td>
			<td><input type="submit" name="btnTribulle_medium" onclick="call()" class="chart" /></td>
		</tr>
		<tr>
			<th>Tri de Shell</th>
			<td><input type="submit" name="btnTriShell_triee" onclick="call()" class="chart" /></td>
			<td><input type="submit" name="btnTriShell_inverse" onclick="call()" class="chart" /></td>
			<td><input type="submit" name="btnTriShell_random" onclick="call()" class="chart" /></td>
			<td><input type="submit" name="btnTriShell_quasi" onclick="call()" class="chart" /></td>
			<td><input type="submit" name="btnTriShell_multi" onclick="call()" class="chart" /></td>
			<td><input type="submit" name="btnTriShell_medium" onclick="call()" class="chart" /></td>
		</tr>
		<tr>
			<th>Tri fusion</th>
			<td><input type="submit" name="btnTriFusion_triee" onclick="call()" class="chart" /></td>
			<td><input type="submit" name="btnTriFusion_inverse" onclick="call()" class="chart" /></td>
			<td><input type="submit" name="btnTriFusion_random" onclick="call()" class="chart" /></td>
			<td><input type="submit" name="btnTriFusion_quasi" onclick="call()" class="chart" /></td>
			<td><input type="submit" name="btnTriFusion_multi" onclick="call()" class="chart" /></td>
			<td><input type="submit" name="btnTriFusion_medium" onclick="call()" class="chart" /></td>
		</tr>
		<tr>
			<th>Tri rapide</th>
			<td><input type="submit" name="btnTriRapide_triee" onclick="call()" class="chart" /></td>
			<td><input type="submit" name="btnTriRapide_inverse" onclick="call()" class="chart" /></td>
			<td><input type="submit" name="btnTriRapide_random" onclick="call()" class="chart" /></td>
			<td><input type="submit" name="btnTriRapide_quasi" onclick="call()" class="chart" /></td>
			<td><input type="submit" name="btnTriRapide_multi" onclick="call()" class="chart" /></td>
			<td><input type="submit" name="btnTriRapide_medium" onclick="call()" class="chart" /></td>
		</tr>
		<tr>
			<th>Tri à peigne</th>
			<td><input type="submit" name="btnTriPeigne_triee" onclick="call()" class="chart" /></td>
			<td><input type="submit" name="btnTriPeigne_inverse" onclick="call()" class="chart" /></td>
			<td><input type="submit" name="btnTriPeigne_random" onclick="call()" class="chart" /></td>
			<td><input type="submit" name="btnTriPeigne_quasi" onclick="call()" class="chart" /></td>
			<td><input type="submit" name="btnTriPeigne_multi" onclick="call()" class="chart" /></td>
			<td><input type="submit" name="btnTriPeigne_medium" onclick="call()" class="chart" /></td>
		</tr>
	</table>
	<hr>
	<canvas id="canvas"></canvas>
<?php $content = ob_get_clean(); ?>
<?php require 'template.php'; ?>
