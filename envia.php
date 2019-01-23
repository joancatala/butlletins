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
$variable_assumpte = $_POST["input_assumpte"];
$variable_formato = $_POST["ch"];
$variable_titol_es = $_POST["input_titol_es"];
$variable_cos_es = $_POST["input_cos_es"];
$variable_titol_ca = $_POST["input_titol_ca"];
$variable_cos_ca = $_POST["input_cos_ca"];

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

function ultim() {

	$consulta1 = "SELECT id FROM $taula order by id desc limit 1;";
	$resultat = mysqli_query($link, $consulta1); 
					
	while($row = mysqli_fetch_array($resultat))
		{
		return $row["id"];
	   echo 'ID= ' . $row["id"];
		 }
					
      mysqli_free_result($resultat); 
      mysqli_close($link);
}

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
// echo "<strong>TITOL CASTELLÀ:</strong> " .$variable_titol_es. "<br />";
// echo "COS CASTELLÀ: " .$variable_cos_es. "<br /><br />";
// echo "<strong>TITOL VALENCIÀ:</strong> " .$variable_titol_ca. "<br />";
// echo "COS VALENCIÀ: " .$variable_cos_ca. "<br />";

// ---------------------------------------------------------------------------------------------
// INSERCIÓ EN LA BASE DE DADES 'newsletter' DE LA INFORMACIÓ DEL BUTLLETÍ
// ---------------------------------------------------------------------------------------------	  

if($_POST)
{
	$queryInsert = "INSERT INTO $taula (data, titol_es, cos_es, titol_ca, cos_ca) VALUES ('".$data."', '".addslashes($variable_titol_es)."', '".addslashes($variable_cos_es)."','".addslashes($variable_titol_ca)."','".addslashes($variable_cos_ca)."');";
	$resultInsert = mysqli_query($link, $queryInsert); 
	if($resultInsert) {
		echo "<font color='green'>Hem insertat les dades correctament a la base de dades.</font><br>";
		} else {
			echo "<font color='red'>No hem pogut introduir els registres</font> <br>";
		}
}

//mysqli_free_result($result); 
mysqli_close($link);

// ---------------------------------------------------------------------------------------------
// PREPAREM LA MAQUETACIÓ DE L'HTML DEL BUTLLETÍ I HO ENMAGATZEM TOT A LA VARIABLE $message
// ---------------------------------------------------------------------------------------------
$message = '<html lang="es"><head>'.
						//'<meta http-equiv=\"content-type\" content=\"text/html; charset=UTF-8\">'.
						'<meta charset="utf-8">'.
						'<meta http-equiv="X-UA-Compatible" content="IE=edge">'.
						'<meta name="viewport" content="width=device-width, initial-scale=1">'.
						'<style>'.
						'body {padding-top: 50px; background: #dedede;}'.
						'.starter-template { padding: 40px 15px; text-align: center;}'.
						'img.fluida {max-width: 100%; height: auto;}	'.
						'.fons {background: #fff; min-height: 800px;}'.
						'h1 {margin: 40px 0 20px 0; font-size: 50px; font-weight: bold; line-height: 82%;}'.
						'.subtitolet {padding: 10px; background-color: #293a58; font-size: 18px; color: #fff; letter-spacing: 2px;}'.
						'.taula {margin: 0 auto; width: 850px; border: none; font-size: 20px;}'.
						'td.doscolumnes {padding: 0 10px 15px 10px; width: 45%; vertical-align: top; text-align: justify;}'.
						'.taula-esquerra {margin: 30px auto 10px auto; width: 850px; border: none; text-align: left; font-size: 20px; background: #f8f8f8; }'.
						'img.icon_social {margin: 15px 10px 0 0; width: 30px; height: 30;}'.
						'</style>'.
						'</head>'.
						'<body><table class="taula"><td>'.
						'<img class="" style="" src="http://joancatala.net/transparent.png" />'.
						'<img class="fluida" src="https://sepam.dipcas.es/newsletters.jpg">'.
						'<div class="subtitolet">Oficina Provincial de Protección de Datos y Seguridad</div><br />'.
						//'<h1>'.  $variable_titol . '</h1>'.   // SI VOLEM TENIR TITOL, DESCOMENTAREM AQUESTA LINEA, PERO AMB EL TEMA BILINGÜE JA NO ENS CAL.
						'</td></table>';

if (($variable_formato=='format1')) {
	// Anem a maquetar l'envimanet amb 1 columna
	$message .= '<table class="taula"><td><div class="mensaje""><h2>' . $variable_titol_es . '</h2>' . $variable_cos_es .'<br /><br /><h2>'. $variable_titol_ca . '</h2>' . $variable_cos_ca . '</div></td></table>';
	} else {
		// Anem a maquetar l'envimanet amb es columnes
		$message .= '<table class="taula"><td class="doscolumnes""><h2>' . $variable_titol_es . '</h2>' . $variable_cos_es . '</td>';
		$message .= '<td class="doscolumnes""><h2>' . $variable_titol_ca . '</h2>' . $variable_cos_ca . '</td></table>';
}

$message .= '<table class="taula-esquerra"><td>Más información en <a href="#">Privacidad y Seguridad de Diputación de Castellón</a>.<br />
             DIPUTACIÓ DE CASTELLÓ - <a href="http://www.dipcas.es">www.dipcas.es</a><br />';									
$message .= '<a href="https://www.facebook.com/dipcas"><img class="icon_social" src="http://sepam.dipcas.es/files/boletin-facebook.png" /></a>
             <a href="https://twitter.com/dipcas"><img class="icon_social" src="http://sepam.dipcas.es/files/boletin-twitter.png" /></a>
													<a href="https://www.youtube.com/user/prensadipcas"><img class="icon_social" src="http://sepam.dipcas.es/files/boletin-youtube.png" /></a>
													<a href="https://www.flickr.com/photos/diputacion/"><img class="icon_social" src="http://sepam.dipcas.es/files/boletin-flickr.png" /></a></td></table>';
$message .= '</div></body></html>';

// ---------------------------------------------------------------------------------------------
// Fem l'enviament del Butlletí
// ---------------------------------------------------------------------------------------------
$cabeceras = 'MIME-Version: 1.0' . "\r\n";
$cabeceras .= 'Content-type: text/html;charset=utf-8' . "\r\n";
$to      = $variable_para;
$subject = "[BOLETIN] " .utf8_decode($variable_assumpte);
$cabeceras .= 'From: privacidadyseguridad@dipcas.es' . "\r\n" .
    'Reply-To: privacidadyseguridad@dipcas.es' . "\r\n" .
				'Cc: ' . $variable_copia . "\r\n";
    'X-Mailer: PHP/' . phpversion();

$enviat = mail($to, $subject, $message, $cabeceras);

if ($enviat) {
		 echo "<br /><br /><strong>----------------------------------------------------------------<br />Informació sobre l'enviament del butlletí:<br />----------------------------------------------------------------<br /></strong>";
    echo "<font color='green'>El butlletí s'ha enviat correctament!</font><br />Recupera la teua informació tornant enrere amb el 
 			navegador i les dades seguiran al formulari.<br />";
			echo "Si experimentes qualsevol problema en aquest punt, escriu a <i>jcatala@dipcas.es</i>.</p>";
   } else {
   echo "<font color='red'>Hi ha hagut algun error enviant el correu.</font>";
   }
?>
 					
</div></section>

<!-- Peu de la web -->		
<?php include "vendor/inc/peu.inc"; ?>