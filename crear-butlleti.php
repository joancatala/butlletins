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

		<div class="row filaformulari">
  		<div class="col-md-6">
  		<div class="ambfons">CASTELLANO</div><br />
  		<span class="labels-mes-menuts">Título:</span>	
			</span><input type="text" class="form-control" id="input_titol_es" name="input_titol_es"><br />
  		<span class="labels-mes-menuts">Cuerpo:
				
								<!-- Button trigger modal -->
								<a href="#bannerformmodal" data-toggle="modal" data-target="#bannerformmodal">(Puedes escribir en HTML)</a></span>

								<!-- Modal -->
								<div class="modal fade bannerformmodal" tabindex="-1" role="dialog" aria-labelledby="bannerformmodal" aria-hidden="true" id="bannerformmodal">
									<div class="modal-dialog modal-dialog-centered" role="document">
										<div class="modal-content">
											<div class="modal-header">
												<h5 class="modal-title" id="exampleModalLongTitle">Usa HTML en tus boletines</h5>
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

			<textarea id="input_cos_es" name="input_cos_es" class="1columna" style="height: 120px;"></textarea>
  		</div>
  		
  		<div class="col-md-6">
  		<div class="ambfons">VALENCIÀ</div><br />
  		<span class="labels-mes-menuts">Títol:</span>			
			<input type="text" class="form-control" id="input_titol_ca" name="input_titol_ca"><br />
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
			
			<textarea id="input_cos_ca" name="input_cos_ca" class="1columna" style="height: 120px;"></textarea>
  		</div>
		</div>

	<input type="hidden" name="form_id" value="42394" />
	<!-- antic botó <input id="saveForm" class="button_text botoenviar" type="submit" name="submit" value="Enviar butlletí" /> -->
  <br /><button id="saveForm" type='submit' class='btn btn-secondary btn-sm btn-secondary'>Enviar butlletí</button>

	</form>

</div></section>

<!-- Peu de la web -->		
<?php include "vendor/inc/peu.inc"; ?>