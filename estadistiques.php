<!-- Cap de la web -->		
<?php include "vendor/inc/cap.inc"; ?>

<!-- Menú de la web -->		
<?php include "vendor/inc/menu.inc"; ?>

<!-- Connexió a la base de dades -->	
<?php include "vendor/inc/connexio.inc"; ?>

<!-- Primer enllaç a la base de dades -->	
<?php include "vendor/inc/link.inc"; ?>

<section class="resume-section p-3 p-lg-5 d-flex flex-column" id="nouformulari">
      
<h2 class="mb-5">Estadístiques</h2>
<div>
  
  <p>Ací a continuació us deixem uns contadors totals dels tipus de butlletins segons la categoria. I en un temps, podrem fer estadístiques també
  dividint les dades per mesos (gener, febrer, març, etc) o fins i tot per altres variables.</p>

<style>
.grafico {
position: relative; /* IE is dumb */
width: 500px;
border: 1px solid #a81d37;
padding: 2px;
margin-bottom: 11px;
}
.grafico .barra {
display: block;
position: relative;
background: #a81d37;
text-align: center;
color: #262626;
height: 2em;
line-height: 2em;
}
.grafico .barra span {
position: absolute; left: 1em;
}
</style>


<?php
    // Ací anem a calcular els totals (count(*)) dels butlletins organitzats per categoires.
    // SUMATORI Total de RGPD
    $query = "SELECT count(*) AS total_rgpd from newsletters WHERE categoria='categoria1'"; 
    $result = mysqli_query($link, $query);
    
    $values = mysqli_fetch_assoc($result); 
    $total_rgpd = $values['total_rgpd'];
    
    // Mostrem el total
    //echo $num_rows;
    
    // tanquem el resulset 
    //mysqli_free_result($result);

    // tanquem la conexió
    //mysqli_close($link);
    
    
    

    // SUMATORI Total de SEPAM
    $query = "SELECT count(*) AS total_sepam from newsletters WHERE categoria='categoria2'"; 
    $result = mysqli_query($link, $query);
    
    $values = mysqli_fetch_assoc($result); 
    $total_sepam = $values['total_sepam'];
    
    // Mostrem el total
    //echo $num_rows;
    
    // tanquem el resulset 
    //mysqli_free_result($result);

    // tanquem la conexió
   // mysqli_close($link);
    
    
    
    
    
    // SUMATORI Total de PWM
    $query = "SELECT count(*) AS total_pwm from newsletters WHERE categoria='categoria3'"; 
    $result = mysqli_query($link, $query);
    
    $values = mysqli_fetch_assoc($result); 
    $total_pwm = $values['total_pwm'];
    
    // Mostrem el total
    //echo $num_rows;
    
    // tanquem el resulset 
    //mysqli_free_result($result);

    // tanquem la conexió
    //mysqli_close($link);    





    // SUMATORI Total de Apps dels Ajuntaments
    $query = "SELECT count(*) AS total_app from newsletters WHERE categoria='categoria4'"; 
    $result = mysqli_query($link, $query);
    
    $values = mysqli_fetch_assoc($result); 
    $total_app = $values['total_app'];
    
    // Mostrem el total
    //echo $num_rows;
    
    // tanquem el resulset 
    //mysqli_free_result($result);

    // tanquem la conexió
    //mysqli_close($link);
    
    



    // SUMATORI Total de PMH
    $query = "SELECT count(*) AS total_pmh from newsletters WHERE categoria='categoria5'"; 
    $result = mysqli_query($link, $query);
    
    $values = mysqli_fetch_assoc($result); 
    $total_pmh = $values['total_pmh'];
    
    // Mostrem el total
    //echo $num_rows;
    
    // tanquem el resulset 
    // mysqli_free_result($result);

    // tanquem la conexió
    //mysqli_close($link);
    
    
    
    
    
    // SUMATORI Total de Gobierno Abierto
    $query = "SELECT count(*) AS total_pmh from newsletters WHERE categoria='categoria6'"; 
    $result = mysqli_query($link, $query);
    
    $values = mysqli_fetch_assoc($result); 
    $total_pmh = $values['total_gobiernoabierto'];
    
    // Mostrem el total
    //echo $num_rows;
    
    // tanquem el resulset 
    // mysqli_free_result($result);

    // tanquem la conexió
    //mysqli_close($link);    
    
    
    
    
    //
    // Anem a calcular els PERCENTATGES per a cada una de les categories
    //
    $query = "SELECT count(*) AS total from newsletters;"; 
    $result = mysqli_query($link, $query);
    
    $values = mysqli_fetch_assoc($result); 
    $reglatres_n = $values['total'];
    
    // Percentatge RGPD
    $percentatge_rgpd = ($total_rgpd * 100/$reglatres_n);
    
    // Percentatge SEPAM
    $percentatge_sepam = ($total_sepam * 100/$reglatres_n);
    
    // Percentatge RGPD
    $percentatge_pwm = ($total_pwm * 100/$reglatres_n);
    
    // Percentatge RGPD
    $percentatge_app = ($total_app * 100/$reglatres_n);
    
    // Percentatge RGPD
    $percentatge_pmh = ($total_pmh * 100/$reglatres_n);
    
    // Percentatge Gobierno Abierto
    $percentatge_gobiernoabierto = ($total_gobiernoabierto * 100/$reglatres_n);        
?>

 <strong>RGPD</strong> (<?php echo $total_rgpd; ?> butlletins publicats)<div class="grafico"><strong class="barra" style="width: <?php echo intval($percentatge_rgpd);?>%;"><?php echo intval($percentatge_rgpd);?>%</strong> </div>
 <strong>SEPAM</strong> (<?php echo $total_sepam; ?> butlletins publicats) <div class="grafico"><strong class="barra" style="width: <?php echo intval($percentatge_sepam);?>%;"><?php echo intval($percentatge_sepam);?>%</strong> </div>
 <strong>Projecto Web Municipal</strong> (<?php echo $total_pwm; ?> butlletins publicats) <div class="grafico"><strong class="barra" style="width: <?php echo intval($percentatge_pwm);?>%;"><?php echo intval($percentatge_pwm);?>%</strong> </div>
 <strong>APP MÓVIL Ayuntamientos</strong> (<?php echo $total_app; ?> butlletins publicats) <div class="grafico"><strong class="barra" style="width: <?php echo intval($percentatge_app);?>%;"><?php echo intval($percentatge_app);?>%</strong> </div>
 <strong>P.M.H.</strong> (<?php echo $total_pmh; ?> butlletins publicats) <div class="grafico"><strong class="barra" style="width: <?php echo intval($percentatge_pmh);?>%;"><?php echo intval($percentatge_pmh);?>%</strong> </div>
 <strong>Gobierno Abierto</strong> (<?php echo $total_pmh; ?> butlletins publicats) <div class="grafico"><strong class="barra" style="width: <?php echo intval($percentatge_gobiernoabierto);?>%;"><?php echo intval($percentatge_gobiernoabierto);?>%</strong> </div>
 
</div></section>

<!-- Peu de la web -->		
<?php include "vendor/inc/peu.inc"; ?>
