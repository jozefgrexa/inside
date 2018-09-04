<?php

  $this->viewBuilder()->setLayout('default');

?>

<section id="start" class="weekend-big-picture" style="background-image: url('../webroot/img/weekend/weekend-big-pic.jpg');">
  <div class="container">
    <div class="row">
      <div class="col text-center">
        <?= $this->Html->image('weekend/vmp-logo.png', ['alt' => 'vmp-logo', 'class' => 'img-fluid']) ?>
      </div>
    </div>
  </div>
</section>

<section id="confirmation">
  <div class="container">
    <div class="row">
      <div class="col text-center">
        <h2 class="text-success">Prihlásenie prebehlo úspešne!</h2>
        <p>Z dôvodu ochrany osobných údajov sú na stránke zobrazené iba krstné mená aktuálne prihlásených účastníkov. Tvoje údaje sme zaregistrovali, podvrdiť by to mal aj email odoslaný na zadanú mailovú adresu.</p>
        <a class="btn btn-success" role="button" href="<?= $this->Url->build(['controller' => 'Weekend', 'action' => 'index']) ?>">Naspäť</a>
      </div>
    </div>
  </div>
</section>