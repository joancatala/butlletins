<!-- Cap de la web -->	
<?php include "vendor/inc/cap.inc"; ?>

<!-- Menú de la web -->	
<?php include "vendor/inc/menu.inc"; ?>


<section class="resume-section p-3 p-lg-5 " id="about"><div>
      
<h2 class="mb-5">Llistat de tots els butlletins</h2>
<div>
	 
<!-- --------------------------------------------------------------------------------------- -->
<!-- FILTRES PER ALS BUTLLETINS -->
<!-- En aquesta secció he afegit el buscador, el filtre per mes i el filtre per categoria -->
<!-- --------------------------------------------------------------------------------------- -->
			<div class="row filaformulari">
  			<div class="col-md-4 filtro1"><input class="form-control" id="myInput" type="text" placeholder="Filtra ací per paraules.."></div>
			
  			<div class="col-md-3 filtro2">
					<form action="#">
					&nbsp;&nbsp;Mes: <select class="filtres" name="mes">
					  <option value="gener2019">[Tots]</option>
					  <option value="gener2019">Gener 2019</option>
					  <option value="febrer2019">Febrer 2019</option>
					  <option value="marc2019">Març 2019</option>
					  <option value="abril2019">Abril 2019</option>
					  <option value="maig2019">Maig 2019</option>
					  <option value="juny2019">Juny 2019</option>
					</select>
			</div>
			
			<div class="col-md-5 filtro3">
					Categoria: <select class="filtres" name="categoria">
					  <option value="totes">[Totes]</option>
					  <option value="#">RGPD</option>
					  <option value="#">PWM</option>
					  <option value="#">SEPAM</option>
					  <option value="#">App dels Ajuntaments</option>
					  <option value="#">Assistència P.M.H.</option>
					</select>
					<button type='submit' class='botonetsubmit-menut btn btn-secondary btn-sm btn-secondary'>Filtrar resultats</button>
					</form>	
			</div>
		</div>
				
	<ul class="list-group" id="myList">&nbsp;<br /><br />

<!-- Connexió a la base de dades -->	
<?php include "vendor/inc/connexio.inc"; ?>

<!-- Primer enllaç a la base de dades -->	
<?php include "vendor/inc/link.inc"; ?>
	
<?php
	$consulta2 = "SELECT id, data, titol_es, categoria, titol_ca FROM $taula order by id desc;";
	$resultat = mysqli_query($link, $consulta2);

	while($row = mysqli_fetch_array($resultat))
	{
		
		/* Anem a seleccionar la imatge fent un switch que compara el valor de la categoria del butlletí (categoria1, categoria2, ... categorian) */
		
		switch ($row["categoria"]) {
			case "categoria1":
				$imatge_butlleti = "preview-newsletter-rgpd.png";
				break;
			case "categoria2":
				$imatge_butlleti = "preview-newsletter-sepam.png";
				break;
			case "categoria3":
				$imatge_butlleti = "preview-newsletter-pwm.png";
				break;
			case "categoria4":
				$imatge_butlleti = "preview-newsletter-app-aytos-castello.png";
				break;
			case "categoria5":
				$imatge_butlleti = "preview-newsletter-pmh.png";
				break;			
		}

		
		echo '<li class="llista list-group-item"><div class="llista-ajax"><div class="llista-ajax-esquerra"><img src="/img/'. $imatge_butlleti .'" /></div><div class="llista-ajax-dreta">'. $row["titol_es"] . '<br />'. $row["titol_ca"]. '<br /><a href="/butlleti.php?id=' .$row["id"]. '"><button type="button" class="opcions btn btn-secondary btn-sm btn-secondary">Visualitzar</button></a><a href="/recuperar-butlleti.php?id=' .$row["id"]. '&categoria='. $row["categoria"]. '"><button type="button" class="opcions btn btn-secondary btn-sm btn-secondary">Reeditar</button></a>&nbsp;<a href="/genera/pdf.php?id=' .$row["id"]. '&categoria='. $row["categoria"]. '"><button type="button" class="opcions btn btn-secondary btn-sm btn-secondary">Genera un PDF</button></a><a onClick="return confirm(\'Estàs segur de voler esborrar aquest butlletí?\')" href="/esborrar.php?id='.$row["id"].'"><button type="button" class="opcions btn btn-secondary btn-sm btn-danger">Esborrar</button></a></div></div></li>';
    } 
				
    mysqli_free_result($resultat); 
    mysqli_close($link);
	?>

	</ul>   
      
	<!-- script per a activar el cercador de dalt amb jQuery -->   
	<script>
	$(document).ready(function(){
  	$("#myInput").on("keyup", function() {
    	var value = $(this).val().toLowerCase();
    	$("#myList li").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    	});
  	});
	});
	</script>

</div></section>

<!-- Peu de la web -->	
<?php include "vendor/inc/peu.inc"; ?>