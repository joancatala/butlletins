<html>
<head></head>

<body>
    
<style>
    img {width: 40px; }
    a {text-decoration: none; color: #000;}
    a:hover {text-decoration: underline; color: #000;}
</style>

<?php

      // ---------------------------------------------------------------------------------------------
      // Insertem aquestes dades a la base de dades
      // ---------------------------------------------------------------------------------------------
      $host = "localhost";
      $port = "3306";
      $usuari = "butlletins";
      $contrasenya = "Alegria2018";
      $base ="newsletters_db";
      $taula = "newsletters";
      
      function Conectarse()
      {
               // Si necessitem fer debug dels problemes relacionats amb la connexió amb la nostra base de dades
               // o coses derivades, descomentarem els "echo" que veuràs a continuació i que estàn comentats.
               // D'aquesta manera sabràs exactament en quin punt ha passat el teu problema.
               global $host, $port, $usuari, $contrasenya, $base, $taula;
       
               if (!($link = mysqli_connect($host.":".$port, $usuari, $contrasenya))) 
               { 
                  //echo "<font color='red'>Error conectando a la base de datos.</font><br>"; 
                  exit();
                  
               } else {
                  
                  //echo "Hem connectat amb la base de dades.";
               }
               
               if (!mysqli_select_db($link, $base)) 
               { 
                  //echo "<font color='red'>Error seleccionando la base de datos.</font><br>"; 
                  exit();
                  
               } else {
                  
                  //echo "Hem pogut obrir la base de dades $base sense problemes.<br>";
               }
               
      return $link; 
      } 
 
  $link = Conectarse();
  
  
  
$consulta2 = "SELECT id, titol_es FROM $taula order by id desc;";
$resultat = mysqli_query($link, $consulta2); 
				
while($row = mysqli_fetch_array($resultat))
	{
		echo '<a href="http://newsletters.dipcas.es/genera/pdf.php?id=' . $row["id"] . '"><img src="img/iconet-pdf-dipcas.png" alt="" />&nbsp;&nbsp;' . $row["titol_es"] . '</a><br />';
    } 
				
    mysqli_free_result($resultat); 
    mysqli_close($link);
    
    ?>

</body>
</html>