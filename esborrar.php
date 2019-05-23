<?php
// Agafem la variable passada per la url, que serà el codi del butlletí que cal esborrar.
$variable_contrasenya = $_POST["inputPassword"];
$variable_id_butlleti = $_POST["id_del_butlleti"];

// DEBUG
//echo "VARIABLE: " . $variable_id; 
//echo "<br />CONTRASENYA: " . $variable_contrasenya;


//Una vegada hem esborrat el butlletí, reenviem a l'usuari a la pàgina des d'on ha vingut
//(el llistat de butlletins) en 1 segon de manera automàtica.
//header( "refresh:1;url=llistat-de-butlletins.php" );
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
	  
	<h2 class="mb-5">Esborrar butlletí</h2>
	

	<?php
	// Comprovem si hem ficat una contrasenya bona. Si és la bona, esborrem el butlletí.
	 if ($variable_contrasenya == "Adios2019") {
			
		    //echo "ID DEL BUTLLETÍ: " . $variable_id_butlleti . "<br />";
			//echo "CONTRASENYA: " . $variable_contrasenya;
			
			
			// fem el DELETE
			$consulta1 = "DELETE FROM newsletters WHERE id=$variable_id_butlleti;";
			$resultat = mysqli_query($link, $consulta1); 
					
			while($row = mysqli_fetch_array($resultat))
			{
			echo "<div class=\"resume-item d-flex flex-column flex-md-row mb-5\"><div class=\"resume-content mr-auto\">";      
			}
					
			mysqli_free_result($resultat); 
			mysqli_close($link);
		 
			// mostrem un missatget després d'esborrar
			echo "<p>El butlletí número <?php echo $variable_id; ?> <strong>ha segut esborrat</strong> de la base de dades correctament.<br /></p>";
			
			
		
	 } else {
	
			// algun curiós està intentant mirar :-)		
			echo "<strong>T'has equivocat de contrasenya.</strong>";
			echo "<br />Torna enrere amb el navegador i torna a escriure-la correctament.";
		
	}	
?>

       
</div></section>

<!-- Peu de la web -->		
<?php include "vendor/inc/peu.inc"; ?>