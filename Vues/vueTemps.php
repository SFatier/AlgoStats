<?php $title = 'Temps de calcul des algorithmes de tri'; ?>
<?php ob_start(); ?>
<h4>Temps d'algo</h4>
</hr>
<form method="post" id="frmChart" >  
	<select class="selectpicker" name="nb_element">
	  <option value="10">10</option>
	  <option value="100">100</option>
	  <option value="1000">1000</option>
	  <option value="10000">10000</option>
	</select>
	<div class="checkbox">
	  <label><input type="checkbox" name="tri[]" value="All">All</label>
	</div>
	<div class="checkbox">
	  <label><input type="checkbox" name="tri[]" value="Insertion">Insertion</label>
	</div>
	<div class="checkbox">
	  <label><input type="checkbox" name="tri[]" value="Selection">Selection</label>
	</div>
	<div class="checkbox">
	  <label><input type="checkbox" name="tri[]" value="Bulle">Bulle</label>
	</div>
	<div class="checkbox">
	  <label><input type="checkbox" name="tri[]" value="Shell">Shell</label>
	</div>
	<div class="checkbox">
	  <label><input type="checkbox" name="tri[]" value="Fusion">Fusion</label>
	</div>
	<div class="checkbox">
	  <label><input type="checkbox" name="tri[]" value="Rapide">Rapide</label>
	</div>
	<div class="checkbox">
	  <label><input type="checkbox" name="tri[]" value="Peigne">Peigne</label>
	</div>
  <br><br>
  <input type="submit" name="submit" value="Submit" >  
</form>

<div id="container" style="width: 75%;">
    <canvas id="canvas"></canvas>
</div>
<?php

	if( isset($_POST['tri']) && is_array($_POST['tri']) && isset($_POST['nb_element'])) 
	{
		$phpArray = null;
	    $select = $_POST['nb_element'];
	    $rangee = list_rangee($select);
	    $invert = list_invert($select);
	    $random = list_random($select);
	    $quasie = list_quasie($select);
	    $multie = list_multie($select);
	   // $medium = list_medium($select);

	    foreach($_POST['tri'] as $tri) 
	    {
	    	if($tri == "All")
	    	{
		    	//trié	        	
		    	$resultat1 = tri_par_insertion($rangee);
		    	$resultat2 = tri_par_selection($rangee);	        	
		    	$resultat3 = tri_a_bulles($rangee);	        
		    	$resultat4 = tri_shell($rangee);	        	
		    	$resultat5 = tri_fusion($rangee);
		    	//$resultat5 = null;
		    	//$resultat6 = tri_rapide($rangee);
		    	$resultat6 = null;
		    	$resultat7 = tri_peigne($rangee);
		    	$tab_rangee = array($resultat1[2], $resultat2[2], $resultat3[2], $resultat4[2], $resultat5[2], $resultat6[2], $resultat7[2]);
		    	//echo "tab_range : ";
		    	//var_dump($tab_rangee);

		    	//Inverse
		    	$resultat1 = tri_par_insertion($invert);
		    	$resultat2 = tri_par_selection($invert);	        	
		    	$resultat3 = tri_a_bulles($invert);	        
		    	$resultat4 = tri_shell($invert);	        	
		    	$resultat5 = tri_fusion($invert);
		    	//$resultat6 = tri_rapide($invert);
				$resultat6 = null;
		    	$resultat7 = tri_peigne($invert);
		    	$tab_inverse = array($resultat1[2], $resultat2[2], $resultat3[2], $resultat4[2], $resultat5[2], $resultat6[2], $resultat7[2]);
		    	//echo "tab_inverse : ";
		    	//var_dump($tab_inverse);

		    	//random
		    	$resultat1 = tri_par_insertion($random);
		    	$resultat2 = tri_par_selection($random);	        	
		    	$resultat3 = tri_a_bulles($random);	        
		    	$resultat4 = tri_shell($random);	        	
		    	$resultat5 = tri_fusion($random);	        	
		    	//$resultat6 = tri_rapide($random);
		    	$resultat6 = null;	
		    	$resultat7 = tri_peigne($random);
		    	$tab_random = array($resultat1[2], $resultat2[2], $resultat3[2], $resultat4[2], $resultat5[2], $resultat6[2], $resultat7[2]);
		    	//echo "tab_random : ";
		    	//var_dump($tab_random);

		    	//quasi
		    	$resultat1 = tri_par_insertion($quasie);
		    	$resultat2 = tri_par_selection($quasie);	        	
		    	$resultat3 = tri_a_bulles($quasie);	        
		    	$resultat4 = tri_shell($quasie);	        	
		    	$resultat5 = tri_fusion($quasie);
		    	        	
		    	//$resultat6 = tri_rapide($quasie);
		    	$resultat6 = null;
		    	$resultat7 = tri_peigne($quasie);
		    	$tab_quasi = array($resultat1[2], $resultat2[2], $resultat3[2], $resultat4[2], $resultat5[2], $resultat6[2], $resultat7[2]);
		    	//echo "tab_quasi : ";
		    	//var_dump($tab_quasi);

		    	//Multi
		    	$resultat1 = tri_par_insertion($multie);
		    	$resultat2 = tri_par_selection($multie);	        	
		    	$resultat3 = tri_a_bulles($multie);	        
		    	$resultat4 = tri_shell($multie);	        	
		    	$resultat5 = tri_fusion($multie);	        	
		    	//$resultat6 = tri_rapide($multie);
		    	$resultat6 = null;	
		    	$resultat7 = tri_peigne($multie);
		    	$tab_multie = array($resultat1[2], $resultat2[2], $resultat3[2], $resultat4[2], $resultat5[2], $resultat6[2], $resultat7[2]);
		    	//echo "tab_multie : ";
		    	//var_dump($tab_multie);

		    	//medium
		    	/*$resultat1 = tri_par_insertion($medium);
		    	$resultat2 = tri_par_selection($medium);	        	
		    	$resultat3 = tri_a_bulles($medium);	        
		    	$resultat4 = tri_shell($medium);	        	
		    	//$resultat5 = tri_fusion($medium);	        	
		    	$resultat5 = null;
		    	//$resultat6 = tri_rapide($medium);
		    	$resultat6 = null;
		    	$resultat7 = tri_peigne($medium);
		    	$tab_medium = array($resultat1[2], $resultat2[2], $resultat3[2], $resultat4[2], $resultat5[2], $resultat6[2], $resultat7[2]);
		    	echo "tab_medium";
		    	var_dump($tab_medium);*/
		    	$phpArray = array(
		          0 => $tab_rangee, 
		          1 => $tab_inverse, 
		          2 => $tab_random, 
		          3 => $tab_quasi,
		          4 => $tab_multie
		    	);
			}
		}
	}	
?>
<?php $content = ob_get_clean(); ?>
