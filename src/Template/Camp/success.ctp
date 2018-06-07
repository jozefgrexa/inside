<?php

  $this->viewBuilder()->setLayout('default');

?>

<section id="home" class="games-home" style="background-image: url('<?= $this->Url->image('camp/camp-big-pic.jpg') ?>')">
  <div class="container">
    <div class="row">
      <div class="col text-right">
        <?= $this->Html->image('home/home-slider-camp.png', ['alt' => 'camp-logo', 'class' => 'img-fluid']) ?>
        <p class="lead">Dobrodružný týždeň v rodinnej atmosfére a nádhernej prírode.</p>
      </div>
    </div>
  </div>
</section>

<section id="confirmation">
  <div class="container">
    <div class="row">
      <div class="col text-center">
        <h2 class="text-success">Prihlásenie prebehlo úspešne!</h2>
        <p>Z dôvodu ochrany osobných údajov nemôžeme na stránke zobrazovať zoznam aktuálne prihlásených účastníkov. Tvoje údaje sme zaregistrovali, podvrdiť by to mal aj email odoslaný na zadanú mailovú adresu.</p>
        <a class="btn btn-success" role="button" href="<?= $this->Url->build(['controller' => 'Camp', 'action' => 'index']) ?>">Naspäť</a>
      </div>
    </div>
  </div>
</section>