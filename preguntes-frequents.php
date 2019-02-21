<!-- Cap de la web -->		
<?php include "vendor/inc/cap.inc"; ?>

<!-- Menú de la web -->		
<?php include "vendor/inc/menu.inc"; ?>

<section class="resume-section p-3 p-lg-5 d-flex flex-column" id="nouformulari">
      
<h2 class="mb-5">Ajuda</h2>
<div>

<div class="accordion" id="preguntes1">
  <div class="card">
    <div class="card-header" id="headingOne">
      <h5 class="mb-0">
        <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
          <h4>Quin és l'objecte d'aquesta web?</h4>
        </button>
      </h5>
    </div>

    <div id="collapseOne" class="collapse show" aria-labelledby="collapseOne" data-parent="#preguntes1">
      <div class="card-body">
        <p><strong><?php echo nom_projecte[0]; ?> <?php echo nom_projecte[1]; ?></strong> es va crear amb la idea de poder enviar correus informatius atractius però senzills i amb poc de text, com una <i>píndola informativa</i> per a usuaris d'un projecte de la <a href="http://www.dipcas.es">Diputació de Castelló</a>. </p>
        <p>Però l'objectiu no és que siga una aplicació multiusuari on es puguen enviar cada dia a milers d'usuaris. Per a fer açò hi ha utilitats comercials com <a href="http://www.mailchimp.com">MailChimp</a> i moltes <a href="https://www.emailtooltester.com/es/blog/alternativas-a-mailchimp/">altres</a> que et permeten enviar correus a molts usuaris amb plantilles personalitzades on, fins i tot, ofereixen serveis comercials - de pagament - amb moltes més funcionalitats que tal vegada siguen del teu interés.</p>
      </div>
    </div>
  </div>
  
  






  <div class="card">
    <div class="card-header" id="preguntes2">
      <h5 class="mb-0">
        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
          <h4>Puc generar documentació en PDF?</h4>
        </button>
      </h5>
    </div>
    <div id="collapseTwo" class="collapse" aria-labelledby="collapseTwo" data-parent="#preguntes2">
      <div class="card-body">
<p>Sí, clar, nomès cal anar fent publicacions (butlletins) i els tindràs a la base de dades, i des de la part del llistat de butlletins podràs anar generant els fitxers PDF fent un sol click. A poc a poc tindràs una colecció de fitxers en format PDF com si fora un manual o una revista digital.</p>

<p>Pots publicar un butlletí molt llarg, amb molt de text, i tindràs un PDF organtizat per pàgines amb la capçalera del teu projecte.</p>
        
      </div>
    </div>
  </div>
  
  
  
  <div class="card">
    <div class="card-header" id="preguntes3">
      <h5 class="mb-0">
        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
          <h4>Com sé si els butlletins quedaran bé?</h4>
        </button>
      </h5>
    </div>
    <div id="collapseThree" class="collapse" aria-labelledby="collapseThree" data-parent="#preguntes3">
      <div class="card-body">
        <p>Molt fàcil. A la part inferior del formulari de creació de butlletins, tens l'opció de previsualitzar els butlletins abans d'enviar-los. I a banda, sempre pots fer unes proves autoenviant-te uns butlletins per a provar com els visualitzaran els teus usuaris.</p>
      </div>
    </div>
  </div>
</div>    


  <div class="card">
    <div class="card-header" id="preguntes3">
      <h5 class="mb-0">
        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseEsborrarButlleti" aria-expanded="false" aria-controls="collapseEsborrarButlleti">
          <h4>Vull esborrar un butlletí</h4>
        </button>
      </h5>
    </div>
    <div id="collapseEsborrarButlleti" class="collapse" aria-labelledby="collapseThree" data-parent="#collapseEsborrarButlleti">
      <div class="card-body">
        <p>Aquest tema és delicat, ja que si esborres dades a una base de dades, no es podràn recuperar fàcilment (hauràs de parlar amb els informàtics i que et restauren una còpia de segureetat del dia anterior, perdent tota la informació d'avui).  <br /><br />
        Per aquest motiu, es considera que hi ha un administrador dels butlletins qui, amb la contrasenya pertinent, podrà esborrar els butlletins irrelevants o duplicats.<br /><br />
        Si et fixes bé, es poden enviar butlletins sense necessitat de desar-los a la base de dades. Nomès cal marcar o desmarcar el checkbox inferior al formulari de publicació.</p>
      </div>
    </div>
  </div>
</div>



  <div class="card">
    <div class="card-header" id="preguntes4">
      <h5 class="mb-0">
        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
          <h4>Puc afegir noves categories de butlletins?</h4>
        </button>
      </h5>
    </div>
    <div id="collapseFour" class="collapse" aria-labelledby="collapseFour" data-parent="#preguntes4">
      <div class="card-body">
        <p>Sí. Però et cal programar-les. De moment no hem automatitzat la creació al vol de noves categories. Però afegir-ne de nous no és massa complicat. Recorda també que cal afegir la teua capçalera i peu personalitzat, i dissenyar un mini icono de la previsualització del teu butlletí.</p>
      </div>
    </div>
  </div>
</div>








  <div class="card">
    <div class="card-header" id="preguntes5">
      <h5 class="mb-0">
        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
         <h4>És programari lliure?</h4>
        </button>
      </h5>
    </div>
    <div id="collapseFive" class="collapse" aria-labelledby="collapseFive" data-parent="#preguntes5">
      <div class="card-body">
        <p>Absolutament. El servidor web és un Apache Web Server corrent sobre un CentOS GNU/Linux oferint PHP (amb diverses llibreries) i una base de dades MySQL on enmagatzem la informació dels butlletins enviats.</p>

<p>La pàgina funciona gràcies a HTML5, CSS3, Bootstrap, Javascript i PHP 7. Tot el codi de la web està compartit a GitHub. Pots descarregar-ho, instal·lar-ho, modificar-ho i millorar-ho.</p>
      </div>
    </div>
  </div>
</div>   




  <div class="card">
    <div class="card-header" id="preguntes6">
      <h5 class="mb-0">
        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
          <h4>He trobat un problema estrany, que faig?</h4>
        </button>
      </h5>
    </div>
    <div id="collapseSix" class="collapse" aria-labelledby="collapseSix" data-parent="#preguntes6">
      <div class="card-body">
        <p>Absolutament. El servidor web és un Apache Web Server corrent sobre un CentOS GNU/Linux oferint PHP (amb diverses llibreries) i una base de dades MySQL on enmagatzem la informació dels butlletins enviats.</p>

<p>Escriu a <i>jcatala@dipcas.es</i> per a incidències o suggerències vàries.</p>
      </div>
    </div>
  </div>
</div>



</div></section>

<!-- Peu de la web -->		
<?php include "vendor/inc/peu.inc"; ?>
