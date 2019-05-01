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

<section id="about" class="text-white bg-week-lead">
  <div class="container">
    <div class="row">
      <div class="col-md-8">
        <h2>Víkend pre starší dorast</h2>
        <p class="lead">INSIDE Víkend pre starší dorast je priestor, kde sa snažíme ísť o niečo hlbšie v budovaní našich vzťahov s Pánom Ježišom- nechceme ostať len pri tom, že sme niečo počuli, ale chceme vidieť zmeny v našich životoch. Ale o tom viac nižšie :) Na tejto víkendovke môžeš očakávať viac rozprávania, slova, chvál, nejaké semináre a menej hier, no to neznamená, že si nič nezahráme. Dôležitým dôrazom je budovanie našich charakterov v rôznych oblastiach nášho života. </p>
      </div>
      <div class="col-md-4">
        <?= $this->Html->image('weekend/miesta_zmeny_motto.png', ['class' => 'img-fluid']) ?>
      </div>
    </div>
  </div>
</section>

<section id="info" class="bg-week-info">
  <div class="container">
    <div class="row">
      <div class="col-md-6">
        <?= $this->Html->image('weekend/miesta_zmeny_headline.png', ['class' => 'img-fluid w-75 mb-5']) ?>
        <p>
        Tento víkend bude o zmene. Pretože žiadna teória a vedomosti, ktoré nazbierame, sa nevyrovnajú tomu, keď ich vieme uplatniť v skutočnom každodennom živote. Počas tohto víkendu sa pozrieme na to, čo vo svojich listoch písal apoštol Pavol. Miesta zmeny, o ktorých budeme hovoriť, nie sú miestami, na ktorých sa instantne niečo zmení. Sú súčasťou procesu. Lebo o tom je väčšina zmien v našich životoch. O postupnom procese zmeny, kedy sa približujeme obrazu, na ktorý nás Pán Boh stvoril. Kedy sa približujeme príkladu, ktorý nám dal Pán Ježiš. Nie preto, že musíme. Preto, že chceme.
        </p>
      </div>
      <div class="col-md-6">
        <h2>Praktické informácie</h2>
          <ul class="list-group list-group-flush">
            <li class="list-group-item bg-transparent">Podujatie je pre dorast vo veku 15-18 rokov</li>
            <li class="list-group-item bg-transparent">MIESTO: Prameň, Častá-Píla</li>
            <li class="list-group-item bg-transparent">TERMÍN: 10.-12. mája 2019</li>
            <li class="list-group-item bg-transparent">ZAČIATOK: piatok - 16:00 začína registrácia</li>
            <li class="list-group-item bg-transparent">KONIEC: nedeľa - obed je posledný bod programu, no dá sa ešte chvíľu zostať na športy a rozhovory,budeme tam asi do 16-tej</li>
            <li class="list-group-item bg-transparent">BÝVANIE: 4-8 posteľové chatky</li>
            <li class="list-group-item bg-transparent">CENA: 30 Eur</li>
            <li class="list-group-item bg-transparent"> V prípade, že by jediným dôvodom tvojej neúčasti mali byť financie, prosím ozvi sa na inside@sem.sk. Radi ti poskytneme zľavu až do výšky 100%. Naozaj radi. Nebudeš prvý, ani posledný :)</li>
          </ul>
      </div>
    </div>
  </div>
</section>

<section id="program" class="weekend" style="background-image: url('<?= $this->Url->image('weekend/miesta_zmeny_big_bg.jpg') ?>');">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <h2>Na programe pracujeme a bude tu zverejnený ešte pred víkendovkou :) </h2>
      </div>
    </div>
    <!--
    <div class="row">
      <div class="col-md-4 mt-3">
        <h4>Piatok</h4>
        <ul class="list-group list-group-flush bg-transparent">
          <li class="list-group-item bg-transparent">16:00 Registrácia</li>
          <li class="list-group-item bg-transparent">18:00 Večera</li>
          <li class="list-group-item bg-transparent">19:30 Večerný program</li>
          <li class="list-group-item bg-transparent">22:30 Nočný pokoj</li>
        </ul>
      </div>
      <div class="col-md-4 mt-3">
        <h4>Sobota</h4>
        <ul class="list-group list-group-flush bg-transparent">
          <li class="list-group-item bg-transparent">08:00 Budíček</li>
          <li class="list-group-item bg-transparent">08:15 Raňajky</li>
          <li class="list-group-item bg-transparent">09:15 Diskusné skupinky</li>
          <li class="list-group-item bg-transparent">10:15 Doobedné športové aktivity</li>
          <li class="list-group-item bg-transparent">12:30 Obed</li>
          <li class="list-group-item bg-transparent">14:30 Veľká hra</li>
          <li class="list-group-item bg-transparent">18:00 Večera</li>
          <li class="list-group-item bg-transparent">19:30 Večerný program</li>
          <li class="list-group-item bg-transparent">22:30 Nočný pokoj</li>
        </ul>
      </div>
      <div class="col-md-4 mt-3">
        <h4>Nedeľa</h4>
        <ul class="list-group list-group-flush bg-transparent">
          <li class="list-group-item bg-transparent">08:00 Budíček</li>
          <li class="list-group-item bg-transparent">08:15 Raňajky</li>
          <li class="list-group-item bg-transparent">09:15 Diskusné skupinky</li>
          <li class="list-group-item bg-transparent">10:15 Služby Božie</li>
          <li class="list-group-item bg-transparent">12:30 Obed</li>
        </ul>
      </div> 
    </div> 
    -->
  </div>
</section>


<section id="signup" class="bg-week-lead">
  <div class="container">
    <h2>Prihlasovací formulár</h2>
    <form id="week-form" method="post" action="#" class="needs-validation" novalidate>        
      <div class="form-row mt-5">
        <div class="col-md-6 mb-3">
          <label for="first-name">Meno</label>
          <input type="text" class="form-control" id="first-name" placeholder="Meno" name="first_name" required>
          <div class="invalid-feedback">
            Prosím uveď svoje meno.
          </div>
        </div>
        <div class="col-md-6 mb-3">
          <label for="last-name">Priezvisko</label>
          <input type="text" class="form-control" id="last-name" placeholder="Priezvisko" name="last_name" required>
          <div class="invalid-feedback">
            Prosím uveď svoje priezvisko.
          </div>
        </div>
      </div>

      <div class="form-row">
        <div class="col-md-6 mb-3">
          <label for="residence">Adresa</label>
          <input type="text" class="form-control" id="residence" placeholder="Ulica, PSČ, Obec" name="residence" required>
          <div class="invalid-feedback">
             Prosím uveď svoju adresu.
          </div>
        </div>
        <div class="col-md-6 mb-3">
          <label for="birthday">Dátum narodenia</label>
          <input type="date" class="form-control" id="birthday" placeholder="" min="1900-01-01" max="2018-06-23" name="birthday" required>
          <div class="invalid-feedback">
            Prosím zadaj správny dátum narodenia.
          </div>
        </div>
      </div>

      <div class="form-row">
        <div class="col-md-6 mb-3">
          <label for="email">E-mail</label>
          <input type="email" class="form-control" id="email" placeholder="" name="email" required>
          <div class="invalid-feedback">
            Prosím zadaj existujúci email.
          </div>
        </div>
        <div class="col-md-6 mb-3">
          <label for="church-select">Vyber svoj cirkevný zbor</label>
          <select class="form-control" id="church-select" name="church">
            <option value="no-church">Neviem/Žiadny/Nie je v zozname</option>
            <?php foreach($churches as $church): ?>
                <option value="<?= $church->name ?>">
                  <?= $church->name ?>
                </option>
            <?php endforeach; ?>
          </select>
        </div>
      </div>

      <div class="form-group">
        <div class="form-check">
          <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
          <label class="form-check-label" for="invalidCheck">
            Súhlasím so spracovaním osobných údajov <a href="<?= $this->Url->build(['controller' => 'Pages', 'action' => 'data_protection'])?>" target="_blank">(podmienky spracovania)</a>
          </label>
          <div class="invalid-feedback">
            Pred odoslaním formuláru prosím označ toto pole.
          </div>
        </div>

        <div class="form-check under-18">
          <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
          <label class="form-check-label" for="invalidCheck">
            Zákonný zástupca / rodič neplnoletého súhlasí s účasťou svojho dieťaťa na podujatí a prinesie <?= $this->Html->link('podpísaný súhlas s účasťou', '/webroot/storage/IV2019_SuhlasSUcastou.pdf', ['target' => '_blank']); ?>
          </label>
          <div class="invalid-feedback">
            Pred odoslaním formuláru prosím označ toto pole.
          </div>
        </div>
        
        <div class="form-check under-16">
          <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
          <label class="form-check-label" for="invalidCheck">
            Prehlasujem, že som požiadal svojho zákonného zástupcu (rodiča) o súhlas so spracovaním mojich osobných údajov.
          </label>
          <div class="invalid-feedback">
            Pred odoslaním formuláru prosím označ toto pole.
          </div>
        </div>
      </div>
      <div id="recaptcha" class="g-recaptcha" data-sitekey="<?= $rc_site_key ?>" data-callback="onSubmit" data-size="invisible"></div>
      <button id="submit-button" class="btn btn-primary submit" type="submit" onclick="executeRecaptcha()">Odoslať</button>
    </form>

    <div class="row">
      <div class="col-md-6 mt-5 text-white">
        <h4>Počet aktuálne prihlásených: <?= $peoplecount['all'] ?></h4>
        <?php foreach ($peoplenames as $name): ?>
          <span><?= $name['first_name'] ?>, </span>
        <?php endforeach; ?>
      </div>
    </div>
  </div>
</section>

<script>
  function executeRecaptcha() {
    $('#week-form').on('submit', function(e){
      e.preventDefault();
    });
    if(document.getElementById("week-form").checkValidity()) {
      $('#submit-button').prop('disabled', true);
      $('#submit-button').html('Odosiela sa ...');
      grecaptcha.execute();
    }
  }
  function onSubmit() {
    document.getElementById("week-form").submit();
  }
</script>
<script src="https://www.google.com/recaptcha/api.js" async defer></script>