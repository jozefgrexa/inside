<?php

  $this->viewBuilder()->setLayout('default');

?>

<section id="start" class="weekend-big-picture weekend" style="background-image: url('<?= $this->Url->image('weekend/miesta_zmeny_bg.jpg') ?>');">
  <div class="container">
    <div class="row">
      <div class="col text-center">
        <?= $this->Html->image('weekend/miesta_zmeny_title.png', ['alt' => 'Miesta zmeny', 'class' => 'img-fluid title-image']) ?>
      </div>
    </div>
  </div>
</section>

<section id="confirmation" class="bg-week-info">
  <div class="container">
    <div class="row">
      <div class="col text-center">
        <h1 class="mb-5"><span class="badge badge-pill badge-success">Prihlásenie prebehlo úspešne!</span></h1>
        <p>Z dôvodu ochrany osobných údajov sú na stránke zobrazené iba krstné mená aktuálne prihlásených účastníkov. Tvoje údaje sme zaregistrovali, podvrdiť by to mal aj email odoslaný na zadanú mailovú adresu.</p>
        <a class="btn btn-success" role="button" href="<?= $this->Url->build(['controller' => 'Weekend', 'action' => 'index']) ?>">Naspäť</a>
      </div>
    </div>
  </div>
</section>