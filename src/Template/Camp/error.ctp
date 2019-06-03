<?php

  $this->viewBuilder()->setLayout('default');

?>

<section id="start" class="weekend-big-picture" style="background-image: url('<?= $this->Url->image('camp/camp-big-pic.jpg') ?>')">
  <div class="container">
    <div class="row">
      <div class="col text-right">
        <?= $this->Html->image('camp/header_logo_2.png', ['alt' => 'camp-logo', 'class' => 'img-fluid']) ?>
      </div>
    </div>
  </div>
</section>

<section id="confirmation">
  <div class="container">
    <div class="row">
      <div class="col text-center">
        <h2 class="text-danger">Prihlásenie nebolo úspešne!</h2>
        <p>Z nejakého dôvodu sa nám nepodarilo overiť tvoje prihlásenie a preto sme tvoju prihlášku nezaregistrovali. Skús to znovu a ak problém pretrvá, určite nám napíš na inside@sem.sk, nejako to vyriešime. Ďakujeme za pochopenie.</p>
        <p><strong>Chybové hlásenie: <?= $this->request->query('code') ?></strong></p>
        <a class="btn btn-danger" role="button" href="<?= $this->Url->build(['controller' => 'Camp', 'action' => 'index']) ?>">Naspäť</a>
      </div>
    </div>
  </div>
</section>