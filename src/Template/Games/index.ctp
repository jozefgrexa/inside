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

<section id="info" class="bg-light games-info">
  <div class="container">
    <div class="row">
      <div class="col">
        <h2>O Games</h2>
        <p class="lead">Je to športový deň na neprofesionálnej úrovni: 4 turnaje v rôznych športoch na 7 ihriskách a ďalší sprievodný program.<br/>Viac ako 250 účastníkov a 20 športových tímov.</p>
      </div>
    </div>
    <div class="row">
      <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3">
        <div class="card info-card-1">
          <div class="card-body">
            <h5 class="card-title">Pre každého</h5>
            <p class="card-text">Prísť môže každý. Pre športovcov máme iba jedno obmedzenie - vek: 12-22 rokov. Ak chceš výnimku, ozvi sa.</p>
          </div>
        </div>
      </div>
      <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3">
        <div class="card info-card-2">
          <div class="card-body">
            <h5 class="card-title">Amatérsky turnaj</h5>
            <p class="card-text">Sme radi, keď je úroveň športov čo najvyššia. Ale hrať môže každý, aj ten, kto to až tak nevie.</p>
          </div>
        </div>
      </div>
      <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3">
        <div class="card info-card-3">
          <div class="card-body">
            <h5 class="card-title">Kresťanské podujatie</h5>
            <p class="card-text">Organizujú to kresťania s dôrazom na hodnoty Biblie. Avšak nemusíš zapadať do žiadnej "kresťanskej šablóny". Príď taký aký si.</p>
          </div>
        </div>
      </div>
      <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3">
        <div class="card info-card-4">
          <div class="card-body">
            <h5 class="card-title">Cieľ</h5>
            <p class="card-text">Priniesť skvelú správu o Ježišovi a zachraňujúcej Božej láske k nám. Ale chceme sa aj zabaviť, len tak byť spolu a zahrať si športy.</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<section id="sports" class="games-sports" style="background-image: url('webroot/img/games/games-bg-sports-2.jpg');">
  <div class="container">
    <div class="row">
      <div class="col">
        <h2>Športy</h2>
        <p class="lead">Je to športový deň na neprofesionálnej úrovni: 4 turnaje v rôznych športoch na 7 ihriskách a ďalší sprievodný program.<br/>Viac ako 250 účastníkov a 20 športových tímov.</p>
      </div>
    </div>
    <div class="row">
      <?php foreach($sports as $sport): ?>
        <div class="col-xs-12 col-sm-6 col-lg-3">
          <div class="card info-card-1">
            <img class="card-img-top" src="<?= 'webroot/img/games/games-'.$sport['title'].'.png'?>" alt="<?= $sport['name'] ?>">
            <div class="card-body">
              <h3 class="card-title"><?= $sport['name'] ?></h3>
              <p class="card-text"><strong>Ihrisko: </strong><?= $sport['ground_type'] ?></p>
              <p class="card-text"><strong>Rozmery: </strong><?= $sport['ground_size'] ?></p>
              <p class="card-text"><strong>Hráči: </strong><?= $sport['players_count'] ?></p>
            </div>
          </div>
        </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<section id="signup">
  <div class="container">
    <h2>Prihlasovací formulár</h2>
    <p class="lead">Prihlásiť sa môžeš práve tu do pondelka 18.6. Poplatok za Games, v ktorom je zahrnutý obed, voda vo fľaši a ďalšie náklady spojené s realizáciou podujatia sa platí na mieste pri registrácií. Poplatok je odstupňovaný podľa dátumu prihlásenia sa: do konca mája <strong>5 €</strong>, potom do 10.júna <strong>6 €</strong> a po tomto dátume až do ukončenia prihlasovania <strong>7 €</strong>.</p>
    <form id="games-form" method="post" action="#" class="needs-validation" novalidate>
      <div class="form-row mt-5">
        <div class="col-md-6 col-lg-6 col-xl-4 mb-3">
          <label for="form-switch">Ako sa chceš prihlásiť</label>
          <div class="btn-group" id="form-switch" role="group" aria-label="Basic example">
            <button type="button" class="btn btn-outline-danger active form-switch-button" id="member-button">Člen tímu</button>
            <button type="button" class="btn btn-outline-danger form-switch-button" id="captain-button">Kapitán tímu</button>
            <button type="button" class="btn btn-outline-danger form-switch-button" id="individual-button">Nesúťažiaci</button>
          </div>
        </div>
        <!-- form field for team member -->
        <div class="col-md-6 mb-3 switchable-field" id="member-field">
          <label for="member-team">Vyber svoj tím</label>
          <select class="form-control team-input" id="member-team" name="team" required>
            <option value="">(názov | kapitán | šport)</option>
            <?php foreach($teams as $team): ?>
              <?php if($team->sport->title != 'nosport'): ?>
                <option value="<?= $team->name ?>">
                  <?= $team->name ?> | <?= $captains[$team->captain->participant_id] ?> | <?= $team->sport->name ?>
                </option>
              <?php endif; ?>
            <?php endforeach; ?>
          </select>
          <div class="invalid-feedback">
            Vyber svoj tím. Ak neexistuje, kapitán ho musí vytvoriť.
          </div>
        </div>
        
        <!-- form field for captain -->
        <div class="col-md-6 mb-3 switchable-field" id="captain-field">
          <div class="row">
            <div class="col-md-8">
              <label for="captain-team">Názov tímu</label>
              <input type="text" class="form-control team-input" id="captain-team" placeholder="Názov vášho tímu" name="team-c" required disabled>
              <div class="valid-feedback">
                Výborný názov!
              </div>
              <div class="invalid-feedback">
                Musíš vyplniť názov vášho tímu!
              </div>
            </div>
            <div class="col-md-4">
              <label for="sport-team">Vyber šport</label>
              <select class="form-control team-input" id="sport-team" name="sport" disabled>
                <?php foreach($sports as $sport): ?>
                  <option value="<?= $sport['name'] ?>">
                    <?= $sport['name'] ?>
                  </option>
                <?php endforeach; ?>
              </select>  
            </div>
          </div>
        </div>

        <!-- form field for individual -->
        <div class="col-md-6 mb-3 switchable-field" id="individual-field">
          <label for="individual-team">Vyber zaradenie</label>
          <select class="form-control team-input" id="individual-team" name="team" required disabled>
            <option value="">(úloha | typ)</option>
            <?php foreach($teams as $team): ?>
              <?php if($team->sport->title == 'nosport'): ?>
                <option value="<?= $team->name ?>">
                  <?= $team->name ?> | <?= $team->sport->name ?>
                </option>
              <?php endif; ?>
            <?php endforeach; ?>
          </select>
          <div class="invalid-feedback">
            Vyber svoju úlohu nesúťažnú úlohu.
          </div>
        </div>
      </div>

      <div class="form-row">
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
  </div>
</section>

<section id="teams" class="games-teams bg-dark text-light">
  <div class="container">
    <div class="row">
      <div class="col">
        <h2>Štatistika prihlásených</h2>
        <p>Celkový počet aktuálne prihlásených: <?= $peoplecount['all'] ?> | Súťažiaci: <?= $peoplecount['sport'] ?> | Nesúťažiaci: <?= $peoplecount['nosport'] ?><p>
      </div>
    </div>
    <div class="row">
      <?php foreach($sports as $sport): ?>
        <div class="col-xs-12 col-sm-6 col-lg-3">
          <div class="card">
            <div class="card-body">
              <h3 class="card-title"><?= $sport['name'] ?></h3>
              <h5>Tímy: <?= $teamscount[$sport['title']] ?> (hráči)</h5>
              <ul>
              <?php foreach($teams as $team): ?>
                <?php if($team->sport->id == $sport['id']): ?>
                  <li><?= $team->name ?> (<?= $playersCount[$team->id] ?>)</li>
                <?php endif; ?>
              <?php endforeach; ?>
              </ul>
            </div>
          </div>
        </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<section id="map">
  <div class="container">
    <div class="row">
      <div class="col">
        <h2>Miesto</h2>
        <p class="lead">INSIDE Games 2018 sa uskutočnia v priestoroch Strednej odbornej školy v Senci - Kysucká 14, 903 01 Senec a športového areálu Slávia Senec - Športová 2316, 903 01 Senec.</p>
        <div class="embed-responsive embed-responsive-16by9">
          <iframe class="embed-responsive-item" src="https://www.google.com/maps/d/u/0/embed?mid=13i9cN-3iygNlEgGmhcmnUshNmhg"></iframe>
        </div>
      </div>
    </div>
  </div>
</section>

<section id="gallery">
  <div class="container">
    <div class="row">
      <div class="col">
        <h2>Fotky: INSIDE Games 2017</h2>
      </div>
    </div>
    <div class="row">
      <div class="col-xs-12 col-sm-6 col-md-4">
        <img src="webroot/img/games/photos/photo-01.jpg" alt="INSIDE Games 2018" class="img-fluid" />
        <img src="webroot/img/games/photos/photo-02.jpg" alt="INSIDE Games 2018" class="img-fluid" />
        <img src="webroot/img/games/photos/photo-03.jpg" alt="INSIDE Games 2018" class="img-fluid" />
        <img src="webroot/img/games/photos/photo-13.jpg" alt="INSIDE Games 2018" class="img-fluid" />
      </div>
      <div class="col-xs-12 col-sm-6 col-md-4">
        <img src="webroot/img/games/photos/photo-05.jpg" alt="INSIDE Games 2018" class="img-fluid" />
        <img src="webroot/img/games/photos/photo-06.jpg" alt="INSIDE Games 2018" class="img-fluid" />
        <img src="webroot/img/games/photos/photo-07.jpg" alt="INSIDE Games 2018" class="img-fluid" />
        <img src="webroot/img/games/photos/photo-04.jpg" alt="INSIDE Games 2018" class="img-fluid" />
        <img src="webroot/img/games/photos/photo-11.jpg" alt="INSIDE Games 2018" class="img-fluid" />
      </div>
      <div class="col-xs-12 col-sm-6 col-md-4">
        <img src="webroot/img/games/photos/photo-08.jpg" alt="INSIDE Games 2018" class="img-fluid" />
        <img src="webroot/img/games/photos/photo-09.jpg" alt="INSIDE Games 2018" class="img-fluid" />
        <img src="webroot/img/games/photos/photo-10.jpg" alt="INSIDE Games 2018" class="img-fluid" />
        <img src="webroot/img/games/photos/photo-12.jpg" alt="INSIDE Games 2018" class="img-fluid" />
      </div>
    </div>
  </div>
</section>

<!-- <section id="program">
  <div class="container">
    <div class="row">
      <div class="col">
        <h2>Program</h2>
        <p class="lead">Pracujeme na tom</p>
      </div>
    </div>
  </div>
</section>

<section id="theme">
  <div class="container">
    <div class="row">
      <div class="col">
        <h2>Téma</h2>
        <p class="lead">Pracujeme na tom</p>
      </div>
    </div>
  </div>
</section> -->

<!-- ************* FORM RESPONSE MODALS ***************** -->
<div class="modal fade" id="modalSuccess" tabindex="-1" role="dialog" aria-labelledby="modalSuccessTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="modalTitle">Prihlásenie úspešné</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <p>Tvoju prihlášku sme zaregistrovali. Tešíme sa na stretnutie.</p>
        <p>V prípade nejakej zmeny, alebo tvojej neúčasti nám prosím napíš na <strong>inside@sem.sk</strong>.</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Rozumiem</button>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="modalError" tabindex="-1" role="dialog" aria-labelledby="modalErrorTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title text-danger" id="modalTitle">Prihlásenie nebolo úspešné</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <p>Tvoju prihlášku sa nepodarilo zaregistrovať. Ospravedlňujeme sa. Prosím, skús to znovu.</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Rozumiem</button>
      </div>
    </div>
  </div>
</div>



<script>
  function executeRecaptcha() {
    $('#games-form').on('submit', function(e){
      e.preventDefault();
    });
    if(document.getElementById("games-form").checkValidity()) {
      $('#submit-button').prop('disabled', true);
      $('#submit-button').html('Odosiela sa ...');
      grecaptcha.execute();
    }
  }
  function onSubmit() {
    document.getElementById("games-form").submit();
  }

</script>
<script src="https://www.google.com/recaptcha/api.js" async defer></script>