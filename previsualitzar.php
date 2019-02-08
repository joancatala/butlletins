<!-- Cap de la web -->		
<?php include "vendor/inc/cap.inc"; ?>

<!-- Menú de la web -->		
<?php include "vendor/inc/menu.inc"; ?>

<section class="resume-section p-3 p-lg-5 d-flex flex-column" id="nouformulari">
      
<h2 class="mb-5">Previsualització del butlletí</h2>
<div>

<p><i>(Esta és la previsualització del butlletí que has redactat. Torna enrere amb el navegador per reeditar-lo o per enviar-lo.</i>)</p><br />

<style>
/*body {padding-top: 50px; font-family: verdana, sans-serif; color: #333333;}*/
/* starter-template { padding: 40px 15px; text-align: center;}*/
img.fluida {max-width: 100%; height: auto;}
.fons {background: #fff; min-height: 800px;}
h3 {margin: 40px 0 20px 0; font-size: 45px; font-weight: bold; line-height: 82%;}
.subtitolet {padding: 10px; background-color: #293a58; font-size: 18px; color: #fff; letter-spacing: 2px;}
.subtitolet2 {padding: 10px; background-color: #989898; font-size: 18px; color: #fff; letter-spacing: 2px;}
.subtitolet3 {padding: 10px; background-color: #333333; font-size: 18px; color: #fff; letter-spacing: 2px;}
.taula {background: #fff; margin: 0 auto; width: 850px; border: none; font-size: 16px;}
td.doscolumnes {padding: 0 10px 15px 10px; width: 45%; vertical-align: top; text-align: justify;}
.taula-esquerra {margin: 30px auto 10px auto; width: 850px; border: none; text-align: left; font-size: 16px; background: #f8f8f8; }
img.icon_social {margin: 15px 10px 0 0; width: 30px; height: 30;}
p.informacio-peu {font-size: 11px; text-align: justify;}
</style>


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
$variable_categoria = $_POST["categoria"];
$variable_titol_es = $_POST["input_titol_es"];
$variable_cos_es = $_POST["input_cos_es"];
$variable_titol_ca = $_POST["input_titol_ca"];
$variable_cos_ca = $_POST["input_cos_ca"];
?>





<?php
//---------------------------------------------------------------------------------------------
//ACÍ LA CAPÇALERA DEPENDRÀ DE LA CATEGORIA DEL BUTLLETÍ (categoria1/2/3/4/...n)
//---------------------------------------------------------------------------------------------
?>
					<?php if (($variable_categoria=='categoria1')) {  ?>
					<table class="taula"><td>
					<img class="fluida" src="https://sepam.dipcas.es/cap-1.png">
					<div class="subtitolet">Oficina Provincial de Protección de Datos y Seguridad</div><br />
					</td></table>				
					<?php }   ?>
					
					<?php if (($variable_categoria=='categoria2')) {  ?>
					<table class="taula"><td>
					<img class="fluida" src="https://sepam.dipcas.es/cap-2.png">
					<div class="subtitolet2">Servei Provincial d'Assesorament a Municipis - SEPAM</div><br />
					</td></table>				
					<?php }   ?>
					
					<?php if (($variable_categoria=='categoria3')) {  ?>
					<table class="taula"><td>
					<img class="fluida" src="https://sepam.dipcas.es/cap-3.png">
					<div class="subtitolet3">Proyecto Web Municipal - Portales Abiertos</div><br />
					</td></table>				
					<?php }   ?>
					
					<?php if (($variable_categoria=='categoria4')) {  ?>
					<table class="taula"><td>
					<img class="fluida" src="https://sepam.dipcas.es/cap-4.png">
					<div class="subtitolet">App de los Ayuntamientos de Castellón</div><br />
					</td></table>				
					<?php }   ?>
					
					<?php if (($variable_categoria=='categoria5')) {  ?>
					<table class="taula"><td>
					<img class="fluida" src="https://sepam.dipcas.es/cap-5.png">
					<div class="subtitolet3">Padró Municipal de la província de Castelló</div><br />
					</td></table>				
					<?php }   ?>					






<?php
if (($variable_formato=='format1')) {
?>

        <!-- // Maquetació en 1 columna -->
        <table class="taula"><td><div class="mensaje"><h3><?php echo $variable_titol_es;?></h3><?php echo $variable_cos_es;?><br /><br /><h3><?php echo $variable_titol_ca;?></h3><?php echo $variable_cos_ca;?></div></td></table>

<?php
	} else {
?>
        <!-- // Anem a maquetar l'envimanet amb dos columnes -->
        <table class="taula"><td class="doscolumnes"><h3><?php echo $variable_titol_es;?></h3><?php echo $variable_cos_es; ?></td>
        <td class="doscolumnes"><h3><?php echo $variable_titol_ca;?></h3><?php echo $variable_cos_ca; ?></td></table>

<?php
}
?>



<?php
//---------------------------------------------------------------------------------------------
//ACÍ EL PEU DEL BUTLLETÍ DEPRENDRÀ DE LA CATEGORIA DEL BUTLLETÍ (categoria1/2/3/4/...n)
//---------------------------------------------------------------------------------------------
?>

<?php if (($variable_categoria=='categoria1')) {   ?>
							<table class="taula-esquerra"><td>
							Más información en <a href="https://www.dipcas.es/es/privacidadyseguridad.html" target="_blank">
							Privacidad y Seguridad de Diputación de Castellón</a><br />DIPUTACIÓ DE CASTELLÓ<br />
												
							<a href="https://www.facebook.com/dipcas" target="_blank"><img class="icon_social" src="http://sepam.dipcas.es/files/boletin-facebook.png" /></a>
							<a href="https://twitter.com/dipcas" target="_blank"><img class="icon_social" src="http://sepam.dipcas.es/files/boletin-twitter.png" /></a>
							<a href="https://www.youtube.com/user/prensadipcas" target="_blank"><img class="icon_social" src="http://sepam.dipcas.es/files/boletin-youtube.png" /></a>
							<a href="https://www.flickr.com/photos/diputacion/" target="_blank"><img class="icon_social" src="http://sepam.dipcas.es/files/boletin-flickr.png" /></a>
<?php } ?>


<?php if (($variable_categoria=='categoria2')) { ?>
							<table class="taula-esquerra"><td>
							<a href='http://sepam.dipcas.es'>Assitència tècnica a municipis (SEPAM)</a> - <a href='http://www.dipcas.es'>Diputació de Castelló</a>		
<?php } ?>


<?php if (($variable_categoria=='categoria3')) { ?>
							<table class="taula-esquerra"><td>
							<a href='http://projectewebmunicipal.dipcas.es'>PROJECTE WEB MUNICIPAL</a> - <a href='http://sepam.dipcas.es'>Assesorament Tècnic a Municipis (SEPAM)</a>		
<?php } ?>


<?php if (($variable_categoria=='categoria4')) { ?>
							<table class="taula-esquerra"><td>
							<img class="fluida" src="https://sepam.dipcas.es/peu-4.png">
<?php } ?>


<?php if (($variable_categoria=='categoria5')) { ?>
							<table class="taula-esquerra"><td>
							<a href='http://sepam.dipcas.es'>Assitència tècnica a municipis (SEPAM)</a> - <a href='http://www.dipcas.es'>Diputació de Castelló</a>
<?php } ?>
					
													
													
<p class="informacio-peu">Este correo está enmarcado dentro de las funciones llevadas a cabo por la Oficina Provincial de Protección de Datos y Seguridad de la Diputación de Castellón,
en calidad de Delegado de Protección de Datos de la Diputación y de las EELL de la provincia cuya población no supera los 20.000 habitantes. Entre otras funciones,
el Delegado de Protección de Datos promoverá la implantación de programas de formación y sensibilización del personal en materia de protección de datos. En concreto,
el art. 39 del RGPD, destaca como una de las funciones del Delegado de Protección de Datos, la de <i>"informar y asesorar al responsable o encargado del tratamiento y a los
empleados que se ocupen del tratamiento de las obligaciones que les incumben en virtud del presente Reglamento".</i></p>
		
<p class="informacio-peu">Aquest correu està emmarcat dins de les funcions dutes a terme per l&apos;Oficina Provincial de Protecció de Dades i Seguretat de la Diputació de Castelló, en qualitat de
Delegat de Protecció de Dades de la Diputació i de les EELL de la província la població de la qual no supera els 20.000 habitants. Entre altres funcions, el
Delegat de Protecció de Dades promourà la implantació de programes de formació i sensibilització del personal en matèria de protecció de dades. En concret,
l&apos;art. 39 del RGPD, destaca com una de les funcions del Delegat de Protecció de Dades, la d&apos;<i>"informar i assessorar el responsable o encarregat del tractament i als
empleats que s&apos;ocupen del tractament de les obligacions que els incumbeixen en virtut del present Reglament".</i></p>

</td></table>












</div>
 </section>


<!-- Peu de la web -->		
<?php include "vendor/inc/peu.inc"; ?>