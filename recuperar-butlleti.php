<?php
$variable_id = $_GET["id"];
$variable_categoria = $_GET["categoria"];
?>

<!-- Cap de la web -->		
<?php include "vendor/inc/cap.inc"; ?>

<!-- Menú de la web -->		
<?php include "vendor/inc/menu.inc"; ?>

<script type="text/javascript">
window.onload = CBcategoria();
</script>
        
 <section class="resume-section p-3 p-lg-5 d-flex flex-column" id="nouformulari">
      
 <h2 class="mb-5">Recuperant les dades del butlletí</h2>
<div>
    
<!-- Connexió a la base de dades -->		
<?php include "vendor/inc/connexio.inc"; ?>

<!-- Primer enllaç a la base de dades -->		
<?php include "vendor/inc/link.inc"; ?>  

	<!-- -------------------------------------------------------------------------------------------- -->
	<!-- ARA ANEM A RECUPERAR LA INFORMACIÓ DEL NOSTRE BUTLLETÍ -->
	<!-- -------------------------------------------------------------------------------------------- -->
<?php
		$consulta1 = "SELECT id, data, categoria, format, titol_es, destinatari, copia, assumpte, cos_es, titol_ca, cos_ca FROM $taula WHERE id=$variable_id;";
		$resultat = mysqli_query($link, $consulta1); 
				
		while($row = mysqli_fetch_array($resultat))
		{
    	?>

       <form id="form_42394" class="appnitro" method="post" action="./envia.php">
	
	<div class="row filaformulari">
  <div class="col-md-6">
			<div class="ambfons">DESTINATARIS DEL BUTLLETÍ</div><br />
			<span class="labels-mes-menuts">Destinatari:
   
			<!-- Button trigger modal -->
								<a href="#bannerformmoda2" data-toggle="modal" data-target="#bannerformmodaladreces">(Informació d'ajuda)</a></span>
   
								<!-- Modal -->
								<div class="modal fade bannerformmoda2" tabindex="-1" role="dialog" aria-labelledby="bannerformmodaladreces" aria-hidden="true" id="bannerformmodaladreces">
									<div class="modal-dialog modal-dialog-centered" role="document">
										<div class="modal-content">
											<div class="modal-header">
												<h5 class="modal-title" id="exampleModalLongTitle">Envia el butlletí a moltes adreces de correu</h5>
												<button type="button" class="close" data-dismiss="modal" aria-label="Close">
													<span aria-hidden="true">&times;</span>
												</button>
											</div>
											<div class="modal-body">
												<p>Si vols enviar un butlletí massiu que arribe a molts destinataris, escriu les adreces de correu electrònic separades separades amb comes (<strong>,</strong>) o punt i coma (<strong>;</strong>). </p>
												Per exemple:<br /><br />
												<i>-correu1@u<strong>,</strong> correu2@dos<strong>,</strong> correu3@tres<strong>,</strong> etc...</i><br />
												<i>-correu1@u<strong>;</strong> correu2@dos<strong>;</strong> correu3@tres<strong>;</strong> etc...</i><br /><br />
												
											</div>
										</div>
									</div>
								</div>
        
        
   <input type="text" class="form-control" id="input_copiaoculta" name="input_copiaoculta">
	</div>
	
 
 
 
  <div class="col-md-6">
			<div class="ambfons">ASSUMPTE DEL BUTLLETÍ</div><br />
			<span class="labels-mes-menuts">Assumpte:</span> <input type="text" class="form-control" id="input_assumpte" name="input_assumpte" onClick="esborraCampAssumpte();" value="[Boletín/Butlletí] ...">
			<!-- <span class="labels-mes-menuts">Còpia (CC):</span> <input type="text" class="form-control" id="input_copia" name="input_copia"><br /> --> 
			<!-- <span class="labels-mes-menuts">Còpia oculta (BCC):</span> <input type="text" class="form-control" id="input_copiaoculta" name="input_copiaoculta"> -->
	</div>
	</div>
	
	<br /><br />
	
	<div class="row filaformulari">
	<div class="col-md-6">
	<div class="ambfons">CATEGORIA DEL BUTLLETÍ</div><br />
			<div class="row filaformulari">
							<div class="col-md-6 radio-toolbar">
							<fieldset id="grup-categoria">
        
<?php            
//--------------------------------------------------------------------------------------------- 
//ACÍ MOSTREM ELS RADIO BUTTONS DE LES CATEGORIES. PERÒ A BANDA, FAIG QUE ESTIGA ACTIVADA LA CATEGORIA CORRESPONENT 
//---------------------------------------------------------------------------------------------
?>
           <?php if (($variable_categoria=='categoria1')) { ?>
									<label class="labels-mes-menuts"><input type="radio"  checked="checked" name="categoria" value="categoria1" onchange="CBcategoria(this.value);" onClick="CBcategoria(this.value);" />RGPD</label><br />
           <?php } else { ?>
									<label class="labels-mes-menuts"><input type="radio"  name="categoria" value="categoria1" onClick="CBcategoria(this.value);" />RGPD</label><br />
           <?php } ?>
           
           <?php if (($variable_categoria=='categoria4')) { ?>
           <label class="labels-mes-menuts"><input type="radio"  checked="checked" name="categoria" value="categoria4" onchange="CBcategoria(this.value);" onClick="CBcategoria(this.value);" />App dels Ajuntaments</label><br />
           <?php } else { ?>
           <label class="labels-mes-menuts"><input type="radio"  name="categoria" value="categoria4" onClick="CBcategoria(this.value);" />App dels Ajuntaments</label><br />
           <?php } ?>
           
           <?php if (($variable_categoria=='categoria5')) { ?>
									<label class="labels-mes-menuts"><input type="radio"  checked="checked" name="categoria" value="categoria5" onchange="CBcategoria(this.value);" onClick="CBcategoria(this.value);" />Assistència P.M.H.</label><br />
           <?php } else { ?>
									<label class="labels-mes-menuts"><input type="radio" name="categoria" value="categoria5" onClick="CBcategoria(this.value);" />Assistència P.M.H.</label><br />
           <?php } ?>           
     
           <?php if (($variable_categoria=='categoria3')) { ?>
									<label class="labels-mes-menuts"><input type="radio" checked="checked" name="categoria" value="categoria3" onchange="CBcategoria(this.value);" onClick="CBcategoria(this.value);" />PWM</label><br />
           <?php } else { ?>
									<label class="labels-mes-menuts"><input type="radio"  name="categoria" value="categoria3" onClick="CBcategoria(this.value);" />PWM</label><br />
           <?php } ?>          
           
           <?php if (($variable_categoria=='categoria2')) { ?>
									<label class="labels-mes-menuts"><input type="radio"  checked="checked" name="categoria" value="categoria2" onchange="CBcategoria(this.value);" onClick="CBcategoria(this.value);" />SEPAM</label><br />
           <?php } else { ?>
									<label class="labels-mes-menuts"><input type="radio"  name="categoria" value="categoria2" onClick="CBcategoria(this.value);" />SEPAM</label><br />
           <?php } ?>                 

           <?php if (($variable_categoria=='categoria6')) { ?>
									<label class="labels-mes-menuts"><input type="radio"  checked="checked" name="categoria" value="categoria6" onchange="CBcategoria(this.value);" onClick="CBcategoria(this.value);" />Gobierno Abierto</label><br />
           <?php } else { ?>
									<label class="labels-mes-menuts"><input type="radio"  name="categoria" value="categoria6" onClick="CBcategoria(this.value);" />Gobierno Abierto</label><br />
           <?php } ?>
           
           
							</fieldset>
							</div>
								<div class="col-md-5 imatgepreviewcategoria-javascript">
									<div id="previsualitzacio-categoriabutlleti-1"></div>
									<div id="previsualitzacio-categoriabutlleti-2"></div>
									<div id="previsualitzacio-categoriabutlleti-3"></div>
									<div id="previsualitzacio-categoriabutlleti-4"></div>
         <div id="previsualitzacio-categoriabutlleti-5"></div>
         <div id="previsualitzacio-categoriabutlleti-6"></div>
								</div>
		</div>
		
		  		
  	</div> 
  		
  		<div class="col-md-6">
	   	<div class="row filaformulari">
  			<div class="col-md-12"><div class="ambfons">FORMAT DELS CORREUS ELECTRÒNICS</div><br /></div>
				<div class="row filaformulari">
							<div class="col-md-5 radio-toolbar">
								<fieldset id="grup-format">
									<label class="labels-mes-menuts"><input type="radio"  checked="checked" name="ch" value="format1" onClick="CB(this.value);" />1 columna</label><br />
									<label class="labels-mes-menuts"><input type="radio"  name="ch" value="format2" onClick="CB(this.value);" />2 columnes</label>
								</fieldset>
							</div>
								<div class="col-md-5 imatgepreviewformat-javascript">
									<div id="previsualitzacio-formatbutlleti-1"></div>
									<div id="previsualitzacio-formatbutlleti-2"></div>			
								</div>
				</div>
				
			</div>  		
  	</div>
		</div>
		
  <br /><br />

		<div class="row filaformulari">
  		<div class="col-md-6">
  		<div class="ambfons">CASTELLANO</div><br />
  		<span class="labels-mes-menuts">Título:</span>	
			</span><input type="text" class="form-control" id="input_titol_es" name="input_titol_es" value="<?php echo $row["titol_es"]; ?>"><br />
  		<span class="labels-mes-menuts">Cuerpo:
				
														<!-- Button trigger modal -->
								<a href="#bannerformmoda2" data-toggle="modal" data-target="#bannerformmoda2">(Puedes escribir con HTML)</a></span>

								<!-- Modal -->
								<div class="modal fade bannerformmoda2" tabindex="-1" role="dialog" aria-labelledby="bannerformmoda2" aria-hidden="true" id="bannerformmoda2">
									<div class="modal-dialog modal-dialog-centered" role="document">
										<div class="modal-content">
											<div class="modal-header">
												<h5 class="modal-title" id="exampleModalLongTitle">Utiliza HTML en tus boletines</h5>
												<button type="button" class="close" data-dismiss="modal" aria-label="Close">
													<span aria-hidden="true">&times;</span>
												</button>
											</div>
											<div class="modal-body">
												Puedes usar negritas, cursivas, colores de fondos o añadir imágenes gracias al HTML. En la página <a target="_blank" href="https://html-online.com">html-online.com</a> dispones de un
												editor HTML que te genera el código automáticamente.
											</div>
											<div class="modal-footer">
												<button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar ventana</button>
											</div>
										</div>
									</div>
								</div>

			<textarea id="input_cos_es" name="input_cos_es" class="1columna" style="height: 120px;"><?php echo $row["cos_es"]; ?></textarea>
  		</div>
  		
  		<div class="col-md-6">
  		<div class="ambfons">VALENCIÀ</div><br />
  		<span class="labels-mes-menuts">Títol:</span>			
			<input type="text" class="form-control" id="input_titol_ca" name="input_titol_ca" value="<?php echo $row["titol_ca"]; ?>"><br />
  		<span class="labels-mes-menuts">Cos:
			
														<!-- Button trigger modal -->
								<a href="#bannerformmoda2" data-toggle="modal" data-target="#bannerformmoda2">(Pots escriure amb HTML)</a></span>

								<!-- Modal -->
								<div class="modal fade bannerformmoda2" tabindex="-1" role="dialog" aria-labelledby="bannerformmoda2" aria-hidden="true" id="bannerformmoda2">
									<div class="modal-dialog modal-dialog-centered" role="document">
										<div class="modal-content">
											<div class="modal-header">
												<h5 class="modal-title" id="exampleModalLongTitle">Utilitza HTML als teus butlletins</h5>
												<button type="button" class="close" data-dismiss="modal" aria-label="Close">
													<span aria-hidden="true">&times;</span>
												</button>
											</div>
											<div class="modal-body">
												Pots usar negreta, itàlica, colors de fons o afegir imatges gràcies a l'HTML. A la pàgina <a target="_blank" href="https://html-online.com">html-online.com</a> tens un 
												editor HTML que et genera el codi automàticament.
											</div>
											<div class="modal-footer">
												<button type="button" class="btn btn-secondary" data-dismiss="modal">Tancar finestra</button>
											</div>
										</div>
									</div>
								</div>
			
			<textarea id="input_cos_ca" name="input_cos_ca" class="1columna" style="height: 120px;"><?php echo $row["cos_ca"]; ?></textarea>
  		</div>
		</div>


      <?php
			
      }
				
      mysqli_free_result($resultat); 
      mysqli_close($link);
      ?>


	<input type="hidden" name="form_id" value="42394" />
	<!-- antic botó <input id="saveForm" class="button_text botoenviar" type="submit" name="submit" value="Enviar butlletí" /> -->
  <br /><button id="boto_enviar" type='submit' class='btn btn-secondary btn-sm btn-secondary' onmouseover="revisaDestinatari();">Enviar butlletí</button>
	<button id="boto_previsualitzar" type='submit' class='btn btn-secondary btn-sm btn-secondary' formaction="/previsualitzar.php" onmouseover="revisaDestinatari();">Previsualitzar</button>

	<input class="checkbasedades" type="checkbox" value="desa" name="desa_a_la_base_de_dades" id="desa_a_la_base_de_dades"><label class="form-check-label" for="defaultCheck1"><strong>Desa</strong> el formulari a la base de dades</label>

	</form>
       
       
       
       
								<!-- Modal d'avís de que no has escrit cap destinatari-->
								<div class="modal fade bannerformmoda2" tabindex="-1" role="dialog" aria-labelledby="sensedestinatari" aria-hidden="true" id="sensedestinatari">
									<div class="modal-dialog modal-dialog-centered" role="document">
										<div class="modal-content">
											<div class="modal-header">
												<h5 class="modal-title" id="exampleModalLongTitle">No hi ha cap destinatari? </h5>
												<button type="button" class="close" data-dismiss="modal" aria-label="Close">
													<span aria-hidden="true">&times;</span>
												</button>
											</div>
											<div class="modal-body">
												Hola! hem detectat que has oblidat afegir algun correu electrònic per al destinatari del formulari, aleshores no es pot enviar aquest butlletí.<br /><br />
												És necessari que escrigues una adreça de correu electrònic, al menys. Afegeix-lo ara i torna a provar.
											</div>
											<div class="modal-footer">
												<button type="button" class="btn btn-secondary" data-dismiss="modal">Tancar finestra</button>
											</div>
										</div>
									</div>
								</div>
        
        
       
 </div></section>

<!-- Peu de la web -->		
<?php include "vendor/inc/peu.inc"; ?>