<!-- Cap de la web -->		
<?php include "vendor/inc/cap.inc"; ?>

<!-- Menú de la web -->		
<?php include "vendor/inc/menu.inc"; ?>

<!-- Connexió a la base de dades -->		
<?php include "vendor/inc/connexio.inc"; ?>

<!-- Primer enllaç a la base de dades -->		
<?php include "vendor/inc/link.inc"; ?>
  
<section class="resume-section p-3 p-lg-5 d-flex d-column" id="about"><div>
	
<h2 class="mb-5">Últim butlletins publicats</h2>
<p>Si vols veure la resta de butlletins, pots accedir a la llista global <a href="/llistat-de-butlletins.php">fent click ací</a>.<br /><br /></p>
	
      <?php
		$consulta1 = "SELECT id, data, titol_es, cos_es FROM $taula order by id desc limit 3;";
		$resultat = mysqli_query($link, $consulta1); 
				
		while($row = mysqli_fetch_array($resultat)) {
    	?>
    
      <div class="resume-item d-flex flex-column flex-md-row mb-5">
      <div class="resume-content mr-auto">
      
      <?php
      echo "<div class='ultimsnewsletters'><a href='butlleti.php?id=". $row["id"] . "'><h3 class='mb-0'>". $row["titol_es"] . "</h3></a>";
      echo "<span class='text-primary'>". $row["data"] ."</span><br />";
      echo "<div>". $row["cos_es"] ."</div></div>";
      }
				
      mysqli_free_result($resultat); 
      mysqli_close($link);
      ?>
          
</div></section>

<!-- Peu de la web -->		
<?php include "vendor/inc/peu.inc"; ?>


























