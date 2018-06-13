<?php

$this->viewBuilder()->setLayout('default');

?>

<section id="start" class="weekend-big-picture" style="background-image: url('<?= $this->Url->image('camp/camp-big-pic.jpg') ?>')">
  <div class="container">
    <div class="row">
      <div class="col text-right">
        <?= $this->Html->image('home/home-slider-camp.png', ['alt' => 'camp-logo', 'class' => 'img-fluid']) ?>
        <p class="lead">Dobrodružný týždeň v rodinnej atmosfére a nádhernej prírode.</p>
      </div>
    </div>
  </div>
</section>

<section id="info">
  <div class="container">
    <div class="row">
      <div class="col-lg-8 mx-auto">
        <h2>12-19.august | Planinka, Dechtice</h2>
        <p class="lead">Prihlasovanie je už spustené. Čoskoro tu nájdeš informácie o téme a programe tábora.</p>
      </div>
    </div>
  </div>
</section>

<section id="signup">
  <div class="container">
    <h2>Prihlasovací formulár</h2>
    <p class="lead">Prihlásiť sa na tábor môžeš práve tu. Cena tábora je <strong>110 €</strong>. Avšak vieme ti poskytnúť zľavu, len nám napíš na inside@sem.sk.</p>
    <form id="camp-form" method="post" action="#" class="needs-validation" novalidate>        
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

      <div class="form-row over-15">
        <div class="col-md-6 mb-3">
          <label for="over-15">Číslo občianskeho preukazu</label>
          <input type="text" class="form-control" id="over-15" placeholder="XY123456" name="idcard" required>
          <div class="invalid-feedback">
             Prosím uveď číslo občianskeho preukazu.
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

      <div class="form-row under-18">
        <div class="col-md-6 mb-3">
          <label for="parent">Meno a prizvisko rodiča (zák. zástupcu)</label>
          <input type="text" class="form-control" id="parent" placeholder="Meno a priezvisko" name="parent" required>
          <div class="invalid-feedback">
             Prosím uveď meno a priezvisko rodiča.
          </div>
        </div>
        <div class="col-md-6 mb-3">
          <label for="phone">Telefonický kontakt na rodiča (zák. zástupcu)</label>
          <input type="number" class="form-control" id="phone" placeholder="0909123456" name="phone" required>
          <div class="invalid-feedback">
            Prosím zadaj telefonický kontakt - iba čísla.
          </div>
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
        <div class="form-check under-16">
          <input class="form-check-input" id="under-16" type="checkbox" value="" id="invalidCheck" required>
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
    <div class="row mt-5">
      <div class="col">
        <h4>Počet aktuálne prihlásených: <?= $peoplecount['all'] ?></h4>
        <?php foreach ($peoplenames as $name): ?>
          <span><?= $name['first_name'] ?>, </span>
        <?php endforeach; ?>
      </div>
    </div>
  </div>
</section>

<section id="gallery">
  <div class="container">
    <div class="row">
      <div class="col">
        <h2>Fotky: INSIDE Tábor 2017</h2>
      </div>
    </div>
    <div class="row">
      <div class="col-xs-12 col-sm-6 col-md-4">
        <img src="webroot/img/camp/photos/photo-01.jpg" alt="INSIDE Tábor 2018" class="img-fluid" />
        <img src="webroot/img/camp/photos/photo-02.jpg" alt="INSIDE Tábor 2018" class="img-fluid" />
        <img src="webroot/img/camp/photos/photo-03.jpg" alt="INSIDE Tábor 2018" class="img-fluid" />
        <img src="webroot/img/camp/photos/photo-04.jpg" alt="INSIDE Tábor 2018" class="img-fluid" />
      </div>
      <div class="col-xs-12 col-sm-6 col-md-4">
        <img src="webroot/img/camp/photos/photo-05.jpg" alt="INSIDE Tábor 2018" class="img-fluid" />
        <img src="webroot/img/camp/photos/photo-06.jpg" alt="INSIDE Tábor 2018" class="img-fluid" />
        <img src="webroot/img/camp/photos/photo-07.jpg" alt="INSIDE Tábor 2018" class="img-fluid" />
        <img src="webroot/img/camp/photos/photo-11.jpg" alt="INSIDE Tábor 2018" class="img-fluid" />
      </div>
      <div class="col-xs-12 col-sm-6 col-md-4">
        <img src="webroot/img/camp/photos/photo-08.jpg" alt="INSIDE Tábor 2018" class="img-fluid" />
        <img src="webroot/img/camp/photos/photo-09.jpg" alt="INSIDE Tábor 2018" class="img-fluid" />
        <img src="webroot/img/camp/photos/photo-10.jpg" alt="INSIDE Tábor 2018" class="img-fluid" />
        <img src="webroot/img/camp/photos/photo-12.jpg" alt="INSIDE Tábor 2018" class="img-fluid" />
      </div>
    </div>
  </div>
</section>

<script>
  function executeRecaptcha() {
    $('#camp-form').on('submit', function(e){
      e.preventDefault();
    });
    if(document.getElementById("camp-form").checkValidity()) {
      $('#submit-button').prop('disabled', true);
      $('#submit-button').html('Odosiela sa ...');
      grecaptcha.execute();
    }
  }
  function onSubmit() {
    document.getElementById("camp-form").submit();
  }
</script>
<script src="https://www.google.com/recaptcha/api.js" async defer></script>