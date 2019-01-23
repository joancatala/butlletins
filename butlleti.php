<?php
$variable_id = $_GET["id"];
?>

		<!-- Cap de la web -->		
		<?php include "vendor/inc/cap.inc"; ?>

		<!-- Menú de la web -->		
		<?php include "vendor/inc/menu.inc"; ?>

		<!-- Connexió a la base de dades -->		
		<?php include "vendor/inc/connexio.inc"; ?>

		<!-- Primer enllaç a la base de dades -->		
		<?php include "vendor/inc/link.inc"; ?>
  
      <section class="resume-section p-3 p-lg-5 d-flex d-column" id="about"><div>
	  
	  	<h2 class="mb-5">Butlletí número <?php echo $variable_id; ?></h2>
	<p>Aquestes són les dues versions (castellà i valencià) del butlletí número número <?php echo $variable_id; ?>.<br /><br /></p>
	
 <?php
		$consulta1 = "SELECT id, data, titol_es, cos_es, titol_ca, cos_ca FROM $taula WHERE id=$variable_id;";
		$resultat = mysqli_query($link, $consulta1); 
				
		while($row = mysqli_fetch_array($resultat))
		{
    	?>
    	  <div class="resume-item d-flex flex-column flex-md-row mb-5">
      <div class="resume-content mr-auto">
						<div class='ultimsnewsletters'
							
      
      <?php
      //echo $row["id"];
      echo "><i>Versión en castellano</i><br /><h3 class='mb-0'>". $row["titol_es"] . "</h3>";
      echo "<span class='text-primary'>". $row["data"] ."</span><br />";
      echo "<div>". $row["cos_es"] ."</div>";
	  
	  //echo $row["id"];
      echo "<i>Versió en valencià</i><br /><h3 class='mb-0'>". $row["titol_ca"] . "</h3>";
      echo "<span class='text-primary'>". $row["data"] ."</span><br />";
      echo "<div>". $row["cos_ca"] ."</div>";
      }
				
      mysqli_free_result($resultat); 
      mysqli_close($link);
      ?>
						</div> <!-- Fi de ultimsnewsletter -->
	
     
        
      </div></section>

		<!-- Peu de la web -->		
		<?php include "vendor/inc/peu.inc"; ?>


























