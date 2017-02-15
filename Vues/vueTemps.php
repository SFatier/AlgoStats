<?php $title = 'Temps de calcul des algorithmes de tri'; ?>
<?php ob_start(); ?>
<h4>Temps d'algo</h4>
		</hr>
		<form id="log">
	    <select multiple class="form-control axey" name="axey" id="select3" required>
	    	<option>All</option>
	    	<option>Insertion</option>
	    	<option>Selection</option>
			<option>Bulle</option>
			<option>Shell</option>
			<option>Fusion</option>
			<option>Rapide</option>
			<option>Peigne</option>
	    </select>
	    <br>
	    <input type="button" onclick="myFunction()" value="Submit form">
	  </form>
	<hr>
	<canvas id="canvas"></canvas>
<?php $content = ob_get_clean(); ?>
