<?php

  $this->viewBuilder()->setLayout('default');

?>

<section id="start" class="bg-week-info">
  <div class="container">
    <div class="row">
      <div class="col text-center">
        <?= $this->Html->image('weekend/bod-zlomu.jpg', ['alt' => 'Miesta zmeny', 'class' => 'img-fluid title-image']) ?>
      </div>
    </div>
  </div>
</section>

<section id="confirmation" class="bg-week-info">
  <div class="container">
    <div class="row">
      <div class="col text-center">
        <h1 class="mb-5"><span class="badge badge-pill badge-danger">Prihlásenie nebolo úspešne!</span></h1>
        <p>Z nejakého dôvodu sa nám nepodarilo overiť tvoje prihlásenie a preto sme tvoju prihlášku nezaregistrovali. Skús to znovu a ak problém pretrvá, určite nám napíš na inside@sem.sk, nejako to vyriešime. Ďakujeme za pochopenie.</p>
        <p><strong>Chybové hlásenie: <?= $this->request->query('code') ?></strong></p>
        <a class="btn btn-danger" role="button" href="<?= $this->Url->build(['controller' => 'Camp', 'action' => 'index']) ?>">Naspäť</a>
      </div>
    </div>
  </div>
</section>