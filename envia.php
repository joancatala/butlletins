<!-- Cap de la web -->		
<?php include "vendor/inc/cap.inc"; ?>

<!-- Menú de la web -->		
<?php include "vendor/inc/menu.inc"; ?>

<section class="resume-section p-3 p-lg-5 d-flex flex-column" id="nouformulari">
         
<!-- Connexió a la base de dades -->		
<?php include "vendor/inc/connexio.inc"; ?>

<!-- Primer enllaç a la base de dades -->		
<?php include "vendor/inc/link.inc"; ?>
				
<section class="resume-section p-3 p-lg-5 d-flex flex-column" id="envia">

<div class="my-auto">

<h2>Processament del butlletí</h2>

<?php
header('Content-Type: text/html; charset=utf-8');
// ---------------------------------------------------------------------------------------------
// Anem a recollir les variables i a preparar-les
// ---------------------------------------------------------------------------------------------
$data = date("Y//m/d");
$variable_para = $_POST["input_destinatari"];
$variable_copia = $_POST["input_copia"];
$variable_copiaoculta = $_POST["input_copiaoculta"];
$variable_assumpte = $_POST["input_assumpte"];
$variable_categoria = $_POST["categoria"];
$variable_formato = $_POST["ch"];
$variable_titol_es = $_POST["input_titol_es"];
$variable_cos_es = $_POST["input_cos_es"];
$variable_titol_ca = $_POST["input_titol_ca"];
$variable_cos_ca = $_POST["input_cos_ca"];
$variable_desa_a_base_dades = $_POST["desa_a_la_base_de_dades"];

// Anem a convertir els espais del textarea en castellà 
if (isset($variable_cos_es)) {
$variable_cos_es = str_replace("\n", "<br />", $variable_cos_es);
$variable_cos_es = str_replace("\r", "", $variable_cos_es);
}

// Anem a convertir els espais del textarea en valencià
if (isset($variable_cos_ca)) {
$variable_cos_ca = str_replace("\n", "<br />", $variable_cos_ca);
$variable_cos_ca = str_replace("\r", "", $variable_cos_ca);
}





//BORREM????
//function ultim() {

//	$consulta1 = "SELECT id FROM $taula order by id desc limit 1;";
//	$resultat = mysqli_query($link, $consulta1); 
					
//	while($row = mysqli_fetch_array($resultat))
		//{
		//return $row["id"];
	    //echo 'ID= ' . $row["id"];
		 //}
					
      //mysqli_free_result($resultat); 
      //mysqli_close($link);
//}





// ---------------------------------------------------------------------------------------------
// DEBUG CASER D'ANAR PER CASA
// Si vols fer provetes com transformacions, concatenacions, etc, nomès et cal descomentar 
// les següents línies d'ací baix:
// ---------------------------------------------------------------------------------------------
// echo "DATA: " .$data. "<br />";
// echo "PARA: " .$variable_para. "<br />";
// echo "COPIA: " .$variable_copia. "<br />";
// echo "ASSUMPTE: " .$variable_assumpte. "<br />";
// echo "FORMAT: " .$variable_formato. "<br /><br />";
// echo "CATEGORIA: " .$variable_categoria. "<br /><br />";
// echo "<strong>TITOL CASTELLÀ:</strong> " .$variable_titol_es. "<br />";
// echo "COS CASTELLÀ: " .$variable_cos_es. "<br /><br />";
// echo "<strong>TITOL VALENCIÀ:</strong> " .$variable_titol_ca. "<br />";
// echo "COS VALENCIÀ: " .$variable_cos_ca. "<br />";

// ---------------------------------------------------------------------------------------------
// INSERCIÓ EN LA BASE DE DADES 'newsletter' DE LA INFORMACIÓ DEL BUTLLETÍ
// ---------------------------------------------------------------------------------------------

if($_POST)
{
	
	// Faig la comprovació de si l'usuari ha marcat el checkbox d'inserció a la base de dades. Si està, fem el INSERT INTO. Si no, saltem.
	if (isset($variable_desa_a_base_dades)) {

				$queryInsert = "INSERT INTO $taula (data, categoria, format, destinatari, copia, assumpte, titol_es, cos_es, titol_ca, cos_ca) VALUES ('".$data."', '".$variable_categoria."', '".$variable_formato."', '".$variable_para."', '".$variable_copia."', '".$variable_assumpte."','".addslashes($variable_titol_es)."', '".addslashes($variable_cos_es)."','".addslashes($variable_titol_ca)."','".addslashes($variable_cos_ca)."');";
				$resultInsert = mysqli_query($link, $queryInsert);
				
				// També escriurem a la taula numeracio_categoriaN, de tal manera que tindrem una numeració de tots els butlletins publicats a les bases de dades
			    // Con esto, calculamos el ID del últim post publicado.
				// Amb la següent consulta, averiguem el ID del últim post publicat, que és del INSERT INTO d'abans.
				// I ho introduirem a la taula numeracio_categoriaN
				$consulta2 = "SELECT id FROM $taula order by id desc limit 1;";
				$resultat = mysqli_query($link, $consulta2); 
								
				while($row = mysqli_fetch_array($resultat))
				  {
				  $UltimID = $row["id"];
				  } 
								
				mysqli_free_result($resultat); 

				
				// Ara fem el INSERT INTO a numeració amb el últim ID.
				$consultaNumeracio = "INSERT INTO numeracio_$variable_categoria (id_butlleti) VALUES ('".$UltimID."');";
				$resultatNumeracio = mysqli_query($link, $consultaNumeracio);
				

				// Finalment mostrem missatge per pantalla
				if($resultInsert) {
				   echo "<font color='green'>Tal i com has marcat al formulari, hem insertat les dades correctament a la base de dades.</font>
					  <br>Ara podràs consultar i recuperar el teu butlletí sempre que vullgues.";
				} else {
					echo "<font color='red'>No hem pogut introduir els registres</font> <br>";
				}
				
				//mysqli_free_result($result); 
				mysqli_close($link);
		
	} else {
				echo "Com que no has marcat l'opció al formulari, les dades no han segut insertades a la base de dades.<br />";
					
	}
}






// ---------------------------------------------------------------------------------------------
// PREPAREM LA MAQUETACIÓ DE L'HTML DEL BUTLLETÍ I HO ENMAGATZEM TOT A LA VARIABLE $message
// ---------------------------------------------------------------------------------------------
$message = "<html lang=\"es\">\r\n<head>\r\n".
						//'<meta http-equiv=\"content-type\" content=\"text/html; charset=UTF-8\">'.
						"<meta charset=\"utf-8\">\r\n".
						"<meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">\r\n".
						"<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">\r\n".
						"<style>\r\n".
						"body {padding-top: 50px; background: #dedede; font-family: verdana, sans-serif; color: #333333;}\r\n".
						".starter-template { padding: 40px 15px; text-align: center;}\r\n".
						"img.fluida {max-width: 100%; height: auto;}\r\n".
						".fons {background: #fff; min-height: 800px;}\r\n".
						"h1 {margin: 40px 0 20px 0; font-size: 45px; font-weight: bold; line-height: 82%;}\r\n".
						".subtitolet {padding: 10px; background-color: #333333; font-size: 18px; color: #fff; letter-spacing: 2px;}\r\n".
						".subtitolet2 {padding: 10px; background-color: #989898; font-size: 18px; color: #fff; letter-spacing: 2px;}\r\n".
						".subtitolet3 {padding: 10px; background-color: #333333; font-size: 18px; color: #fff; letter-spacing: 2px;}\r\n".
						".taula {margin: 0 auto; width: 850px; border: none; font-size: 16px;}\r\n".
						"td.doscolumnes {padding: 0 10px 15px 10px; width: 45%; vertical-align: top; text-align: justify;}\r\n".
						".taula-esquerra {margin: 30px auto 10px auto; width: 850px; border: none; text-align: left; font-size: 16px; background: #f8f8f8; }\r\n".
						"img.icon_social {margin: 15px 10px 0 0; width: 30px; height: 30;}\r\n".
						"p.informacio-peu {font-size: 11px; text-align: justify;}\r\n".
						"</style>\r\n".
						"</head>\r\n".
						"<body>\r\n<table class=\"taula\"><td>\r\n";
						
						
						
						
//---------------------------------------------------------------------------------------------
//ACÍ LA CAPÇALERA DEPENDRÀ DE LA CATEGORIA DEL BUTLLETÍ (categoria1/2/3/4/...n)
//---------------------------------------------------------------------------------------------

						
					if (($variable_categoria=='categoria1')) {
						$message .="<img class=\"fluida\" src=\"https://sepam.dipcas.es/cap-1.png\">\r\n".
						"<div class=\"subtitolet\">Oficina Provincial de Protección de Datos y Seguridad</div><br />\r\n".
						"</td></table>\r\n";
					}
					
					if (($variable_categoria=='categoria2')) {
						$message .="<img class=\"fluida\" src=\"https://sepam.dipcas.es/cap-2.png\">\r\n".
						"<div class=\"subtitolet2\">Servei Provincial d'Assistència a Municipis - SEPAM</div><br />\r\n".
						"</td></table>\r\n";
					}
					
					if (($variable_categoria=='categoria3')) {
						$message .="<img class=\"fluida\" src=\"https://sepam.dipcas.es/cap-3.png\">\r\n".
						"<div class=\"subtitolet3\">Proyecto Web Municipal - Portales Abiertos</div><br />\r\n".
						"</td></table>\r\n";
					}
					
					if (($variable_categoria=='categoria4')) {
						$message .="<img class=\"fluida\" src=\"https://sepam.dipcas.es/cap-4.png\">\r\n".
						"<div class=\"subtitolet\">App de los Ayuntamientos de Castellón</div><br />\r\n".
						"</td></table>\r\n";
					}

					if (($variable_categoria=='categoria5')) {
						$message .="<img class=\"fluida\" src=\"https://sepam.dipcas.es/cap-5.png\">\r\n".
						"<div class=\"subtitolet3\">Butlletí sobre el Padró Municipal de la província de Castelló</div><br />\r\n".
						"</td></table>\r\n";
					}					
						
					if (($variable_categoria=='categoria6')) {
						$message .="<img class=\"fluida\" src=\"https://sepam.dipcas.es/cap-6.png\">\r\n".
						"<div class=\"subtitolet3\">Gobierno Abierto - Diputació de Castelló</div><br />\r\n".
						"</td></table>\r\n";
					}							
			
			
			
			
//---------------------------------------------------------------------------------------------
//ACÍ FEM EL FORMAT DEL BUTLLETÍ (1 O 2 COLUMNES, INDEPENDENTMENT DE LA CATEGORIA)
//---------------------------------------------------------------------------------------------						
						if (($variable_formato=='format1')) {
							// Anem a maquetar l'envimanet amb 1 columna
							$message .= "<table class=\"taula\"><td><div class=\"mensaje\">\r\n<h2>" . $variable_titol_es . "</h2>\r\n" . $variable_cos_es ."<br /><br />\r\n<h2>". $variable_titol_ca . "</h2>\r\n" . $variable_cos_ca . "\r\n</div></td></table>\r\n";
							} else {
								// Anem a maquetar l'envimanet amb es columnes
								$message .= "<table class=\"taula\"><td class=\"doscolumnes\">\r\n<h2>" . $variable_titol_es . "</h2>\r\n" . $variable_cos_es . "</td>\r\n";
								$message .= "<td class=\"doscolumnes\">\r\n<h2>" . $variable_titol_ca . "</h2>\r\n" . $variable_cos_ca . "</td></table>\r\n";
						}

						
						
						
						
//---------------------------------------------------------------------------------------------
//ACÍ EL PEU DEL BUTLLETÍ DEPRENDRÀ DE LA CATEGORIA DEL BUTLLETÍ (categoria1/2/3/4/...n)
//---------------------------------------------------------------------------------------------
					if (($variable_categoria=='categoria1')) {
						$message .= "<table class=\"taula-esquerra\"><td>" . "\r\n";
						$message .= "Más información en <a href=\"https://www.dipcas.es/es/privacidadyseguridad.html\" target=\"_blank\">";
						$message .= "Privacidad y Seguridad de Diputación de Castellón</a><br />DIPUTACIÓ DE CASTELLÓ<br />";
										 
						$message .= "<a href=\"https://www.facebook.com/dipcas\" target=\"_blank\"><img class=\"icon_social\" src=\"http://sepam.dipcas.es/files/boletin-facebook.png\" /></a>
									<a href=\"https://twitter.com/dipcas\" target=\"_blank\"><img class=\"icon_social\" src=\"http://sepam.dipcas.es/files/boletin-twitter.png\" /></a>
									<a href=\"https://www.youtube.com/user/prensadipcas\" target=\"_blank\"><img class=\"icon_social\" src=\"http://sepam.dipcas.es/files/boletin-youtube.png\" /></a>
									<a href=\"https://www.flickr.com/photos/diputacion/\" target=\"_blank\"><img class=\"icon_social\" src=\"http://sepam.dipcas.es/files/boletin-flickr.png\" /></a>";
						$message .= clausules_rgpd;
					}

					if (($variable_categoria=='categoria2')) {
						$message .= "<table class=\"taula-esquerra\"><td>" . "\r\n";
						$message .= peu_estandard;
						$message .="<br /><br /><a href=\"http://sepam.dipcas.es\">Servei Provincial d'Assistència a Municipis (SEPAM)</a> - <a href=\"http://www.dipcas.es\">Diputació de Castelló</a>\r\n";					
					}
					
					if (($variable_categoria=='categoria3')) {
						$message .= "<table class=\"taula-esquerra\"><td>" . "\r\n";
						$message .= peu_estandard;
						$message .="<br /><br /><a href=\"http://sepam.dipcas.es\">Servei Provincial d'Assistència a Municipis (SEPAM)</a> - <a href=\"http://www.dipcas.es\">Diputació de Castelló</a>\r\n";					
					}
					
					if (($variable_categoria=='categoria4')) {
						$message .= "<table class=\"taula-esquerra\"><td>" . "\r\n";
						$message .= peu_estandard;
						$message .="<br /><br /><a href=\"http://sepam.dipcas.es\">Servei Provincial d'Assistència a Municipis (SEPAM)</a> - <a href=\"http://www.dipcas.es\">Diputació de Castelló</a>\r\n";					
					}
					
					if (($variable_categoria=='categoria5')) {
						$message .= "<table class=\"taula-esquerra\"><td>" . "\r\n";
						$message .= peu_estandard;
						$message .="<br /><br /><a href=\"http://sepam.dipcas.es\">Servei Provincial d'Assistència a Municipis (SEPAM)</a> - <a href=\"http://www.dipcas.es\">Diputació de Castelló</a>\r\n";					
					}				
						
					if (($variable_categoria=='categoria6')) {
						$message .= "<table class=\"taula-esquerra\"><td>" . "\r\n";
						$message .="<br /><br /><a href=\"http://gobiernoabierto.dipcas.es\">Gobierno Abierto</a> - <a href=\"http://www.dipcas.es\">Diputació de Castelló</a>\r\n";					
					}								
						
						
																															
//---------------------------------------------------------------------------------------------
//LES CLÀUSULES DE PROTECCIÓ DE DADES ÉS COMUNA A TOTES LES CATEGORIES DE BUTLLETINS
//---------------------------------------------------------------------------------------------													
						
						$message .=  "</td></table>";
						$message .=  "</div></body></html>";

						
						
						
						
// ---------------------------------------------------------------------------------------------
// Fem l'enviament del Butlletí
// ---------------------------------------------------------------------------------------------
						$cabeceras  = "MIME-Version: 1.0" . "\r\n";
						$cabeceras .= "Content-type: text/html;charset=utf-8" . "\r\n";
						$to         = $variable_para;
						$subject    = "" .utf8_decode($variable_assumpte);
						
	
						// segons la categoria del butlletí, els correus tenen un remitent distint //
						
						if (($variable_categoria=='categoria1')) {
						$cabeceras .= "From: privacidadyseguridad@dipcas.es" . "\r\n" .
									  "Reply-To: privacidadyseguridad@dipcas.es" . "\r\n" .
									  "Cc: " . $variable_copia . "\r\n".
									  "Bcc: " . $variable_copiaoculta . "\r\n";
									  "X-Mailer: PHP/" . phpversion();
						}
						
						if (($variable_categoria=='categoria2')) {
						$cabeceras .= "From: no_respondas@dipcas.es" . "\r\n" .
									  "Reply-To: no_respondas@dipcas.es" . "\r\n" .
									  "Cc: " . $variable_copia . "\r\n".
									  "Bcc: " . $variable_copiaoculta . "\r\n";
									  "X-Mailer: PHP/" . phpversion();
						}						
						
						if (($variable_categoria=='categoria3')) {
						$cabeceras .= "From: pwm@dipcas.es" . "\r\n" .
									  "Reply-To: pwm@dipcas.es" . "\r\n" .
									  "Cc: " . $variable_copia . "\r\n".
									  "Bcc: " . $variable_copiaoculta . "\r\n";
									  "X-Mailer: PHP/" . phpversion();
						}	

						if (($variable_categoria=='categoria4')) {
						$cabeceras .= "From: pwm@dipcas.es" . "\r\n" .
									  "Reply-To: pwm@dipcas.es" . "\r\n" .
									  "Cc: " . $variable_copia . "\r\n".
									  "Bcc: " . $variable_copiaoculta . "\r\n";
									  "X-Mailer: PHP/" . phpversion();
						}	
						
						if (($variable_categoria=='categoria5')) {
						$cabeceras .= "From: testrela@dipcas.es" . "\r\n" .
									  "Reply-To: testrela@dipcas.es" . "\r\n" .
									  "Cc: " . $variable_copia . "\r\n".
									  "Bcc: " . $variable_copiaoculta . "\r\n";
									  "X-Mailer: PHP/" . phpversion();
						}
						
						if (($variable_categoria=='categoria6')) {
						$cabeceras .= "From: no_respondas@dipcas.es" . "\r\n" .
									  "Reply-To: no_respondas@dipcas.es" . "\r\n" .
									  "Cc: " . $variable_copia . "\r\n".
									  "Bcc: " . $variable_copiaoculta . "\r\n";
									  "X-Mailer: PHP/" . phpversion();
						}							

						// Enviem finalment //
						
						$enviat = mail($to, $subject, $message, $cabeceras);
						
						if ($enviat) {
							echo "<br /><br /><strong>----------------------------------------------------------------<br />Informació sobre l'enviament del butlletí:<br />----------------------------------------------------------------<br /></strong>";
							echo "<font color='green'>El butlletí s'ha enviat correctament!</font><br />Recupera la teua informació tornant enrere amb el 
							navegador i les dades seguiran al formulari.<br />";
							echo "Si ho prefereixes, pots reeditar el teu butlletí i tornar-lo a enviar des del <a href='./llistat-de-butlletins.php'>llistat global de butlletins</a>.</p>";
							} else {
								echo "<font color='red'>Hi ha hagut algun error enviant el correu.</font>";
								}
?>
 					
</div></section>

<!-- Peu de la web -->		
<?php include "vendor/inc/peu.inc"; ?>