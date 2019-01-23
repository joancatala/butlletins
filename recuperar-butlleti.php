<?php
$variable_id = $_GET["id"];
?>

<!-- Cap de la web -->		
<?php include "vendor/inc/cap.inc"; ?>

<!-- Menú de la web -->		
<?php include "vendor/inc/menu.inc"; ?>


 <section class="resume-section p-3 p-lg-5 d-flex flex-column" id="nouformulari">
      
 <h2 class="mb-5">Crear un nou butlletí</h2>
<div>
    
<!-- Connexió a la base de dades -->		
<?php include "vendor/inc/connexio.inc"; ?>

<!-- Primer enllaç a la base de dades -->		
<?php include "vendor/inc/link.inc"; ?>
	
   	<form id="form_42394" class="appnitro" method="post" action="./envia.php">
	<div class="row filaformulari">
  		<div class="col-md-6">
  			<div class="ambfons">DADES PRINCIPALS DEL BUTLLETÍ</div><br />
			<div class="row filaformulari">
  			<div class="col-md-6"><span class="labels-mes-menuts">Destinatari:</span> <input type="text" class="form-control" id="input_destinatari" name="input_destinatari"></div>
  			<div class="col-md-6"><span class="labels-mes-menuts">Còpia (CC):</span> <input type="text" class="form-control" id="input_copia" name="input_copia"></div>
		</div><br />
		
		<div class="row filaformulari">
  			<div class="col-md-12"><span class="labels-mes-menuts">Assumpte:</span> <input type="text" class="form-control" id="input_assumpte" name="input_assumpte" value="[Boletín/Butlletí] ..."></div>
		</div>		  		
  	</div>
  		
  		<div class="col-md-6">
	   	<div class="row filaformulari">
  			<div class="col-md-12"><div class="ambfons">FORMAT DELS CORREUS ELECTRÒNICS</div><br /></div>
		
  		<div class="col-md-5 radio-toolbar">
  			<label class="labels-mes-menuts"><input type="radio"  checked="checked" name="ch" value="format1" onClick="CB(this.value);" />1 columna</label><br />
         <label class="labels-mes-menuts"><input type="radio"  name="ch" value="format2" onClick="CB(this.value);" />2 columnes</label>
  		</div>
  		<div class="col-md-7">
  			<div id="previsualitzacio-formatbutlleti-1"></div>
  			<div id="previsualitzacio-formatbutlleti-2"></div>
  		</div>
		</div>  		
  		</div>
		</div>
		
	 <br /><br />		
					
	<!-- -------------------------------------------------------------------------------------------- -->
	<!-- ARA ANEM A RECUPERAR LA INFORMACIÓ DEL NOSTRE BUTLLETÍ -->
	<!-- -------------------------------------------------------------------------------------------- -->
<?php
		$consulta1 = "SELECT id, data, titol_es, cos_es, titol_ca, cos_ca FROM $taula WHERE id=$variable_id;";
		$resultat = mysqli_query($link, $consulta1); 
				
		while($row = mysqli_fetch_array($resultat))
		{
    	?>
					
						
		<div class="row filaformulari">
  		<div class="col-md-6">
  		<div class="ambfons">CASTELLANO</div><br />
  		<span class="labels-mes-menuts">Título:</span> <input type="text" class="form-control" id="input_titol_es" name="input_titol_es" value="<?php echo $row["titol_es"]; ?>"><br />
  		<span class="labels-mes-menuts">Cuerpo:</span> <textarea id="input_cos_es" name="input_cos_es" class="1columna" style="height: 120px;" onInput="unacolumna_exclusivo()"><?php echo $row["cos_es"]; ?></textarea>
  		</div>
  		
  		<div class="col-md-6">
  		<div class="ambfons">VALENCIÀ</div><br />
  		<span class="labels-mes-menuts">Títol:</span> <input type="text" class="form-control" id="input_titol_ca" name="input_titol_ca" value="<?php echo $row["titol_ca"]; ?>"><br />
  		<span class="labels-mes-menuts">Cos:</span> <textarea id="input_cos_ca" name="input_cos_ca" class="1columna" style="height: 120px;" onInput="unacolumna_exclusivo()"><?php echo $row["cos_ca"]; ?></textarea>
  		</div>
		</div>
		
		
							<input type="hidden" name="form_id" value="42394" />
							<input id="saveForm" class="button_text botoenviar" type="submit" name="submit" value="Enviar butlletí" />
							</form>

      <?php
			
      }
				
      mysqli_free_result($resultat); 
      mysqli_close($link);
      ?>

 </div></section>

<!-- Peu de la web -->		
<?php include "vendor/inc/peu.inc"; ?>