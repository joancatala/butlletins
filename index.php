<?php include "vendor/inc/cap.inc"; ?>

<!-- Menú de la web -->		
<?php include "vendor/inc/menu.inc"; ?>

    <div class="container-fluid p-0">

      <section class="resume-section p-3 p-lg-5 d-flex d-column" id="about">
        
        <div class="my-auto">
          <h1 class="mb-0"><?php echo nom_projecte[0]; ?>
            <span class="text-primary"><?php echo nom_projecte[1]; ?></span>
          </h1>
          <div class="subheading mb-5">Butlletins personalitzats per a comunicacions vistoses amb HTML ·
            <a href="http://www.dipcas.es"><?php echo empresa; ?></a>
          </div>
          <p class="lead mb-5">Aquest programari crea uns senzills butlletins informatius per a la <?php echo empresa; ?> per tal d'enviar-los per correu electrònic i els arxiva a una base de dades per a la seua posterior consulta o reutilització.</p>     
        
          <div class="iconets-portada">
            <a href="#"><img src="img/monitor-php.png" alt="PHP 7" /></a>
            <a href="#"><img src="img/monitor-html5.png" alt="HTML 5" /></a>
            <a href="#"><img src="img/monitor-js.png" alt="Javascript" /></a>
            <a href="#"><img src="img/monitor-css3.png" alt="CSS 3" /></a>
            <a href="#"><img src="img/monitor-mysql.png" alt="MySQL / MariaDB" /></a>
          </div>

        </div>
      </section>

<!-- Peu de la web -->		
<?php include "vendor/inc/peu.inc"; ?>