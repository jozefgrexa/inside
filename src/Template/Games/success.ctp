<?php

  $this->viewBuilder()->setLayout('default');

?>

<section id="home" class="games-home" style="background-image: url('<?= $this->Url->image('games/games-bg-sports.jpg') ?>')">
  <div class="container">
    <div class="row">
      <div class="col-md-12 col-lg-6">
        <?= $this->Html->image('games/games-logo.png', ['alt' => 'games-logo', 'class' => 'img-fluid']) ?>
      </div>
      <div class="col-md-12 col-lg-6 text-right pt-3">
        <h4>Športový turnaj <strong>pre každého</strong></h4>
        <h2>23.jún 2018 | Senec</h2>
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
        <a class="btn btn-success" role="button" href="<?= $this->Url->build(['controller' => 'Games', 'action' => 'index']) ?>">Naspäť</a>
      </div>
    </div>
  </div>
</section>