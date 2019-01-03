<?php
// ---------------------------------------------------------------------------------------------
// Anem a recollir les variables i a preparar-les
// ---------------------------------------------------------------------------------------------
$variable_para = $_POST["element_1"];
$variable_copia = $_POST["element_2"];
$variable_titol = $_POST["element_3"];
$variable_mensajecampo1 = $_POST["element_4"];
$variable_mensajecampo2 = $_POST["element_5"];
$variable_mensajecampo3 = $_POST["element_6"];

// Anem a convertir els espais del textarea a <br /> 
if (isset($variable_mensajecampo1)) {
$variable_mensajecampo1 = ereg_replace("\n", "<br>", $variable_mensajecampo1);
$variable_mensajecampo1 = ereg_replace("\r", "", $variable_mensajecampo1);
}

// Anem a convertir els espais del textarea 2 (esquerra de les dos columnes) a <br /> 
if (isset($variable_mensajecampo2)) {
$variable_mensajecampo2 = ereg_replace("\n", "<br>", $variable_mensajecampo2);
$variable_mensajecampo2 = ereg_replace("\r", "", $variable_mensajecampo2);
}

// Anem a convertir els espais del textarea 3 (dreta de les dos columnes) a <br /> 
if (isset($variable_mensajecampo3)) {
$variable_mensajecampo3 = ereg_replace("\n", "<br>", $variable_mensajecampo3);
$variable_mensajecampo3 = ereg_replace("\r", "", $variable_mensajecampo3);
}

// ---------------------------------------------------------------------------------------------
// Preparem la maquetacio de l'HTML del butlleti i ho enmagatzenem tot a la variable '$message'
// ---------------------------------------------------------------------------------------------
$message = '<html lang=\"en\"><head>'.
           '<meta http-equiv=\"content-type\" content=\"text/html; charset=UTF-8\">'.
           '<meta charset=\"UTF-8\">'.
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
           '<body><table class="taula"><td>   '.
           '<img class="" src="http://sepam.dipcas.es/files/boletin-logodipcas.png" />&nbsp;&nbsp;&nbsp;'.
											'<img class="fluida" src="http://sepam.dipcas.es/files/boletin-cabecera.png" />'.
           '<div class="subtitolet">Oficina Provincial de Protección de Datos y Seguridad</div><br />'.
           '<h1>'.  utf8_encode($variable_titol) . '</h1></td></table>';

											if (empty($variable_mensajecampo2)) {
														$message .= '<table class="taula"><td><div class="mensaje">' . utf8_encode($variable_mensajecampo1) . '</div></td></table>';
											} else {
														$message .= '<table class="taula"><td class="doscolumnes">' . utf8_encode($variable_mensajecampo2) . '</td>';
														$message .= '<td class="doscolumnes">' . utf8_encode($variable_mensajecampo3) . '<!-- row --></td></table>';
											}

$message .= '<table class="taula-esquerra"><td>Más información en <a href="#">Privacidad y Seguridad de Diputación de Castellón</a>.<br />
             DIPUTACIÓ DE CASTELLÓ - <a href="http://www.dipcas.es">www.dipcas.es</a><br />';									
$message .= '<a href="https://www.facebook.com/dipcas"><img class="icon_social" src="http://sepam.dipcas.es/files/boletin-facebook.png" /></a>
             <a href="https://twitter.com/dipcas"><img class="icon_social" src="http://sepam.dipcas.es/files/boletin-twitter.png" /></a>
													<a href="https://www.youtube.com/user/prensadipcas"><img class="icon_social" src="http://sepam.dipcas.es/files/boletin-youtube.png" /></a>
													<a href="https://www.flickr.com/photos/diputacion/"><img class="icon_social" src="http://sepam.dipcas.es/files/boletin-flickr.png" /></a></td></table>';
$message .= '</div></body></html>';

$cabeceras = 'MIME-Version: 1.0' . "\r\n";
$cabeceras .= 'Content-type: text/html;charset=UTF-8' . "\r\n";

// ---------------------------------------------------------------------------------------------
// Fem l'enviament del Butlletí
// ---------------------------------------------------------------------------------------------
$to      = $variable_para;
$subject = '[BOLETIN] ' . $variable_titol;

$cabeceras .= 'From: privacidadyseguridad@dipcas.es' . "\r\n" .
    'Reply-To: privacidadyseguridad@dipcas.es' . "\r\n" .
				'Cc: ' . $variable_copia . "\r\n";
    'X-Mailer: PHP/' . phpversion();

$enviat = mail($to, $subject, $message, $cabeceras);

 if ($enviat) {
    echo '<br /><br /><center><h1><font color="green">&#161;El bolet&iacute;n se ha enviado correctamente&#33;</font></h1><p>Si deseas volver a enviar un bolet&iacute;n con
				      la misma informaci&oacute;n, puedes volver a la pantalla anterior desde el navegador y los datos seguir&aacute;n en el formulario.</p></center>';
    } else {
    echo 'Hi ha hagut algun error enviant el correu.';
    }
?> 