         <?php
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
  
  ?>