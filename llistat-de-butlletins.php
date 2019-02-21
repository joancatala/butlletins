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
					  <option value="agost2019">Agost 2019</option>
					  <option value="setembre2019">Setembre 2019</option>
					  <option value="octubre2019">Octubre 2019</option>
					  <option value="novembre2019">Novembre 2019</option>
					  <option value="desembre2019">Desembre 2019</option>
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
					  <option value="#">Gobierno Abierto</option>
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
			case "categoria6":
				$imatge_butlleti = "preview-newsletter-gobiernoabierto.png";
				break;				
		}

		
		echo '<li class="llista list-group-item"><div class="llista-ajax"><div class="llista-ajax-esquerra"><img src="/img/'. $imatge_butlleti .'" /></div><div class="llista-ajax-dreta">'. $row["titol_es"] . '<br />'. $row["titol_ca"]. '<br /><a href="/butlleti.php?id=' .$row["id"]. '"><button type="button" class="opcions btn btn-secondary btn-sm btn-secondary">Visualitzar</button></a><a href="/recuperar-butlleti.php?id=' .$row["id"]. '&categoria='. $row["categoria"]. '"><button type="button" class="opcions btn btn-secondary btn-sm btn-secondary">Reeditar</button></a>&nbsp;<a href="/genera/pdf.php?id=' .$row["id"]. '&categoria='. $row["categoria"]. '"><button type="button" class="opcions btn btn-secondary btn-sm btn-secondary">Genera un PDF</button></a><a onClick="esborrarbutlleti('.$row["id"].');"><button type="button" class="opcions btn btn-secondary btn-sm btn-danger">Esborrar</button></a></div></div></li>';
    
	    // Ara agafem la variable $identificador_butlleti i la passarem al butó d'esborrar dins del modal.
		$identificador_butlleti = $row["id"];
		//echo $identificador_butlleti;
		
		?>
		

								<!-- Modal d'avís de si vols esborrar el butlletí -->
								<div class="modal fade bannerformmoda2" tabindex="-1" role="dialog" aria-labelledby="esborrarbutlleti" aria-hidden="true" id="esborrarbutlleti<?php echo $identificador_butlleti;?>">
									<div class="modal-dialog modal-dialog-centered" role="document">
										<div class="modal-content">
											<div class="modal-header">
												<h5 class="modal-title" id="exampleModalLongTitle">Vols esborrar aquest butlletí?</h5>
												<button type="button" class="close" data-dismiss="modal" aria-label="Close">
													<span aria-hidden="true">&times;</span>
												</button>
											</div>
											<div class="modal-body">

												Estàs a punt d'esborrar un butlletí que prèviament havia segut desat a la base de dades de l'aplicació.<br /><br />
												Aquesta és una decisió sensible, ja que si esborres el teu butlletí no hi ha manera de recuperar-lo. Aleshores, per motius
												de seguretat, necessitem que confirmes la teua identitat com a administrador dels butlletins:<br /><br />
																								
												<form class="form-inline" method="post" action="./esborrar.php">
												<div class="form-group mx-sm-3 mb-2">
												  <label for="inputPassword2" class="sr-only">Password</label>
												  <input type="hidden" name="id_del_butlleti" value="<?php echo $identificador_butlleti;?>" />
												  <input type="password" class="form-control" id="inputPassword" name="inputPassword" placeholder="Password">
												</div>
												<a href="./esborrar.php"><button type="submit" class="btn btn-primary mb-2 btn-danger">Esborrar butlletí</button></a>
											  </form>
												
												<br /><br />												
												
											</div>
										</div>
									</div>
								</div>		
		
		
		
	<?php
		
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