<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Enviador de newsletters</title>
<link rel="stylesheet" type="text/css" href="css/view.css" media="all">
<link href="css/newsletter-bootstrap.css" rel="stylesheet">

<script Language="JavaScript">
function unacolumna_exclusivo() {
  document.getElementById("element_5").disabled = document.getElementById("element_4").value.length;
  document.getElementById("element_6").disabled = document.getElementById("element_4").value.length;
}

function doscolumnas_exclusivo() {
  document.getElementById("element_4").disabled = document.getElementById("element_5").value.length || document.getElementById("element_6").value.length;
  /* document.getElementById("element_4").disabled = document.getElementById("element_6").value.length; */
}
</script>

</head>

<body id="main_body" >
	
	<img id="top" src="top.png" alt="">
	<div id="form_container">
	
		<form id="form_42394" class="appnitro"  method="post" action="./envia.php">

                <h1>DESTINATARIS I T&Iacute;TOL DEL BUTLLET&Iacute;</h1>
                <br />
                <!-- 2 columnes del PARA -->
                <div class="row content text dadesdestinataris">
                <div class="col-md-2 col-sm-2">PARA</div>

                <div class="col-md-10 col-sm-10">
                     <div><input id="element_1" name="element_1" class="element text medium" type="text" maxlength="255" value=""/> </div>
                </div>
                </div> <!-- row -->


                <!-- 2 columnes del COPIA -->
                <div class="row content text dadesdestinataris"">
                <div class="col-md-2 col-sm-2">COPIA (CC)</div>

                <div class="col-md-10 col-sm-10">
                     <div><input id="element_2" name="element_2" class="element text medium" type="text" maxlength="255" value=""/> </div>
                </div>
                </div> <!-- row -->


                <!-- 2 columnes del TITOL -->
                <div class="row content text dadesdestinataris">
                <div class="col-md-2 col-sm-2">TITOL</div>

                <div class="col-md-10 col-sm-10">
                     <div><input id="element_3" name="element_3" class="element text medium" type="text" maxlength="255" value=""/> </div>
                </div>
                </div> <!-- row -->

                <h1>MENSAJE 1 COLUMNA</h1>
		<li id="li_4" >
		<label class="description" for="element_4">MENSAJE </label>
		<div><textarea id="element_4" name="element_4" class="1columna" style="width:580px; height: 120px;" onInput="unacolumna_exclusivo()"></textarea></div> 
		</li>


                <h1>MENSAJE 2 COLUMNAS</h1>
                <!-- Columna esquerra -->
		<div class="row content text">
		<div class="col-md-6 col-sm-6">
		<li id="li_4" >
		<label class="description" for="element_5">TEXTO IZQUIERDA</label>
		<div><textarea id="element_5" name="element_5" class="2columnas" style="width:270px; height: 120px;" onInput="doscolumnas_exclusivo()"></textarea></div> 
		</li>
		</div>

                <!-- Columna dreta -->
		<div class="col-md-6 col-sm-6">
		<li id="li_4" >
		<label class="description" for="element_6">TEXTO DERECHA</label>
		<div><textarea id="element_6" name="element_6" class="2columnas" style="width:270px; height: 120px;" onInput="doscolumnas_exclusivo()"></textarea></div> 
		</li>
		</div>
		</div> <!-- row -->


		<li class="buttons">
                <input type="hidden" name="form_id" value="42394" />
		<input id="saveForm" class="button_text" type="submit" name="submit" value="Enviar boletin" />
		</li>
		</ul>
		</form>	

		<div id="footer"></div>
	</div>
	<img id="bottom" src="bottom.png" alt="">

	</body>
</html>
