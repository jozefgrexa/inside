<?php

  $this->viewBuilder()->setLayout('default');

?>

<section id="home" class="games-home" style="background-image: url('<?= $this->Url->image('games/games-bg-sports.jpg') ?>')">
  <div class="container">
    <div class="row">
      <div class="col text-center">
        <?= $this->Html->image('games/main-logo.png', ['alt' => 'INSIDE Games 2018 Logo Téma', 'class' => 'img-fluid']) ?>
      </div>
    </div>
  </div>
</section>

<section id="program" class="games-program bg-light">
  <div class="container">
    <div class="row mb-5">
      <div class="col">
        <h2 class="text-danger">Príďte už medzi 8:00 a 8:45 na registráciu!!!</h2>
      </div>
    </div>
    <div class="row">
      <div class="col-md-6">
        <h4>08:00 Registrácia</h4>
        <p>Do 9:00 musíme stihnúť zaregistrovať 200 ľudí, tak príďte čím skôr.</p>
        <h4>09:00 Štart</h4>
        <p>Otvorenie dňa, predstavenie rozhodcov, športov a pravidiel. Tu už buďte prezlečení a nachystaní športovať.</p>
        <h4>10:00 Turnaje</h4>
        <p>Športové turnaje na športoviskách podľa rozpisu zápasov</p>
        <h4>12:15 Obed</h4>
        <p>Posilnenie pre všetkých.</p>
      </div>
      <div class="col-md-6">
        <h4>13:15 Polčas</h4>
        <p>Tematický program s kapelou a hovoreným slovom.</p>
        <h4>14:00 Turnaje</h4>
        <p>Športové turnaje na športoviskách podľa rozpisu zápasov.</p>
        <h4>16:00 Cieľ</h4>
        <p>Vyhodnotenie turnajov, vyhlásenie víťazov, odovzdanie cien.</p>
      </div>
    </div>
  </div>
</section>

<section id="rules" class="games-rules bg-dark text-light">
  <div class="container">
    <div class="row mb-5">
      <div class="col">
        <h2>Všeobecné a športové pravidlá</h2>
      </div>
    </div>
    <div class="row">
      <div class="col-xs-12 col-sm-6 col-md-6 col-lg-4">
        <div class="card text-dark">
          <?= $this->Html->image('games/card-generalrules.jpg', ['alt' => 'INSIDE Games 2018 Všeobecné pravidlá', 'class' => 'img-fluid']) ?>
          <div class="card-body">
            <h3 class="card-title">Všeobecné pravidlá</h3>
            <p class="card-text">Všeobecné pravidlá týkajúce sa správania na INSIDE Games.</p>
            <a href="<?= $this->Url->build('/storage/IG2018_VseobecnePravidla.pdf')?>" download class="btn btn-primary">Stiahni PDF</a>
            <a href="<?= $this->Url->build('/storage/IG2018_VseobecnePravidla.pdf')?>" target="_blank" class="btn btn-success">Otvor PDF</a>
          </div>
        </div>
      </div>
      <div class="col-xs-12 col-sm-6 col-md-6 col-lg-4">
        <div class="card text-dark">
          <?= $this->Html->image('games/card-sportrules.jpg', ['alt' => 'INSIDE Games 2018 Všeobecné športové pravidlá', 'class' => 'img-fluid']) ?>
          <div class="card-body">
            <h3 class="card-title">Športové pravidlá</h3>
            <p class="card-text">Všeobecné športové pravidlá týkajúce sa športov na INSIDE Games.</p>
            <a href="<?= $this->Url->build('/storage/IG2018_VseobecneSportovePravidla.pdf')?>" download class="btn btn-primary">Stiahni PDF</a>
            <a href="<?= $this->Url->build('/storage/IG2018_VseobecneSportovePravidla.pdf')?>" target="_blank" class="btn btn-success">Otvor PDF</a>
          </div>
        </div>
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

<section id="matches">
  <div class="container">
    <h2>Rozpisy a výsledky</h2>
    <div class="row">
      <div class="col">
        <ul class="nav nav-tabs" id="sports_matches" role="tablist">
          <li class="nav-item">
            <a class="nav-link active" id="home-tab" data-toggle="tab" href="#football" role="tab" aria-controls="home" aria-selected="true">Futbal</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" id="profile-tab" data-toggle="tab" href="#floorball" role="tab" aria-controls="profile" aria-selected="false">Florbal</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" id="contact-tab" data-toggle="tab" href="#volleyball" role="tab" aria-controls="contact" aria-selected="false">Volejbal</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" id="contact-tab" data-toggle="tab" href="#dodgeball" role="tab" aria-controls="contact" aria-selected="false">Vybíjaná</a>
          </li>
        </ul>
        <div class="tab-content" id="matches">
          <div class="tab-pane fade show active" id="football" role="tabpanel" aria-labelledby="football-tab">
            <h4 class="mb-3 mt-3">Rozpis zápasov</h4>
            <table class="table">
              <thead>
                <tr>
                  <th scope="col">Čas</th>
                  <th scope="col">Tím 1</th>
                  <th scope="col">Tím 2</th>
                  <th scope="col">Výsledok</th>
                  <th scope="col">Ihrisko</th>
                  <th scope="col">Fáza</th>
                </tr>
              </thead>
              <tbody>
                <?php foreach ($football as $match): ?>
                <tr>
                  <td><?= $match['time']?></td>
                  <td><?= $match['team1']?></td>
                  <td><?= $match['team2']?></td>
                  <td><?= $match['score1']?> : <?= $match['score2']?></td>
                  <td><?= $match['ground']?></td>
                  <td><?= $match['comment']?></td>
                </tr>
                <?php endforeach; ?>
              </tbody>
            </table>
            <h4>Tabuľka</h4>
            <table class="table">
              <thead>
                <tr>
                  <th scope="col">Tím</th>
                  <th scope="col">Skóre</th>
                  <th scope="col">+/-</th>
                  <th scope="col">Body</th>
                </tr>
              </thead>
              <tbody>
                <?php foreach ($footballTable as $key => $team): ?>
                <tr>
                  <td><?= $key ?></td>
                  <td><?= $team['score1'].':'.$team['score2'] ?></td>
                  <td><?= $team['score1']-$team['score2'] ?></td>
                  <td><?= $team['points'] ?></td>
                </tr>
                <?php endforeach; ?>
              </tbody>
            </table>
          </div>


          <div class="tab-pane fade" id="floorball" role="tabpanel" aria-labelledby="floorball-tab">
            <h4 class="mb-3 mt-3">Rozpis zápasov</h4>
            <table class="table">
              <thead>
                <tr>
                  <th scope="col">Čas</th>
                  <th scope="col">Tím 1</th>
                  <th scope="col">Tím 2</th>
                  <th scope="col">Výsledok</th>
                  <th scope="col">Ihrisko</th>
                  <th scope="col">Fáza</th>
                </tr>
              </thead>
              <tbody>
                <?php foreach ($floorball as $match): ?>
                <tr>
                  <td><?= $match['time']?></td>
                  <td><?= $match['team1']?></td>
                  <td><?= $match['team2']?></td>
                  <td><?= $match['score1']?> : <?= $match['score2']?></td>
                  <td><?= $match['ground']?></td>
                  <td><?= $match['comment']?></td>
                </tr>
                <?php endforeach; ?>
              </tbody>
            </table>  
            <div class="row">
              <div class="col">
                <h4>Skupina A</h4>
                <table class="table">
                  <thead>
                    <tr>
                      <th scope="col">Tím</th>
                      <th scope="col">Skóre</th>
                      <th scope="col">+/-</th>
                      <th scope="col">Body</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php foreach ($floorballATable as $key => $team): ?>
                    <tr>
                      <td><?= $key ?></td>
                      <td><?= $team['score1'].':'.$team['score2'] ?></td>
                      <td><?= ($team['score1']-$team['score2']) > 0 ? '+'.($team['score1']-$team['score2']) : ($team['score1']-$team['score2']) ?></td>
                      <td><?= $team['points'] ?></td>
                    </tr>
                    <?php endforeach; ?>
                  </tbody>
                </table>
              </div>
            </div>
            <div class="row">
              <div class="col">
                <h4>Skupina B</h4>
                <table class="table">
                  <thead>
                    <tr>
                      <th scope="col">Tím</th>
                      <th scope="col">Skóre</th>
                      <th scope="col">+/-</th>
                      <th scope="col">Body</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php foreach ($floorballBTable as $key => $team): ?>
                    <tr>
                      <td><?= $key ?></td>
                      <td><?= $team['score1'].':'.$team['score2'] ?></td>
                      <td><?= $team['score1']-$team['score2'] ?></td>
                      <td><?= $team['points'] ?></td>
                    </tr>
                    <?php endforeach; ?>
                  </tbody>
                </table>
              </div>
            </div>
            <div class="row">
              <div class="col">
                <h4>Skupina C</h4>
                <table class="table">
                  <thead>
                    <tr>
                      <th scope="col">Tím</th>
                      <th scope="col">Skóre</th>
                      <th scope="col">+/-</th>
                      <th scope="col">Body</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php foreach ($floorballCTable as $key => $team): ?>
                    <tr>
                      <td><?= $key ?></td>
                      <td><?= $team['score1'].':'.$team['score2'] ?></td>
                      <td><?= $team['score1']-$team['score2'] ?></td>
                      <td><?= $team['points'] ?></td>
                    </tr>
                    <?php endforeach; ?>
                  </tbody>
                </table>
              </div>
            </div>
          </div>


          <div class="tab-pane fade" id="volleyball" role="tabpanel" aria-labelledby="volleyball-tab">
            <h4 class="mb-3 mt-3">Rozpis zápasov</h4>
            <table class="table">
              <thead>
                <tr>
                  <th scope="col">Čas</th>
                  <th scope="col">Tím 1</th>
                  <th scope="col">Tím 2</th>
                  <th scope="col">Výsledok</th>
                  <th scope="col">Ihrisko</th>
                  <th scope="col">Fáza</th>
                </tr>
              </thead>
              <tbody>
                <?php foreach ($volleyball as $match): ?>
                <tr>
                  <td><?= $match['time']?></td>
                  <td><?= $match['team1']?></td>
                  <td><?= $match['team2']?></td>
                  <td><?= $match['score1']?> : <?= $match['score2']?></td>
                  <td><?= $match['ground']?></td>
                  <td><?= $match['comment']?></td>
                </tr>
                <?php endforeach; ?>
              </tbody>
            </table>
            <h4>Tabuľka</h4>
            <table class="table">
              <thead>
                <tr>
                  <th scope="col">Tím</th>
                  <th scope="col">Skóre</th>
                  <th scope="col">+/-</th>
                  <th scope="col">Body</th>
                </tr>
              </thead>
              <tbody>
                <?php foreach ($volleyballTable as $key => $team): ?>
                <tr>
                  <td><?= $key ?></td>
                  <td><?= $team['score1'].':'.$team['score2'] ?></td>
                  <td><?= $team['score1']-$team['score2'] ?></td>
                  <td><?= $team['points'] ?></td>
                </tr>
                <?php endforeach; ?>
              </tbody>
            </table>
          </div>


          <div class="tab-pane fade" id="dodgeball" role="tabpanel" aria-labelledby="dodgeball-tab">
            <h4 class="mb-3 mt-3">Rozpis zápasov</h4>
            <table class="table">
              <thead>
                <tr>
                  <th scope="col">Čas</th>
                  <th scope="col">Tím 1</th>
                  <th scope="col">Tím 2</th>
                  <th scope="col">Výsledok</th>
                  <th scope="col">Ihrisko</th>
                  <th scope="col">Fáza</th>
                </tr>
              </thead>
              <tbody>
                <?php foreach ($dodgeball as $match): ?>
                <tr>
                  <td><?= $match['time']?></td>
                  <td><?= $match['team1']?></td>
                  <td><?= $match['team2']?></td>
                  <td><?= $match['score1']?> : <?= $match['score2']?></td>
                  <td><?= $match['ground']?></td>
                  <td><?= $match['comment']?></td>
                </tr>
                <?php endforeach; ?>
              </tbody>
            </table>
            <h4>Tabuľka</h4>
            <table class="table">
              <thead>
                <tr>
                  <th scope="col">Tím</th>
                  <th scope="col">Skóre</th>
                  <th scope="col">+/-</th>
                  <th scope="col">Body</th>
                </tr>
              </thead>
              <tbody>
                <?php foreach ($dodgeballTable as $key => $team): ?>
                <tr>
                  <td><?= $key ?></td>
                  <td><?= $team['score1'].':'.$team['score2'] ?></td>
                  <td><?= $team['score1']-$team['score2'] ?></td>
                  <td><?= $team['points'] ?></td>
                </tr>
                <?php endforeach; ?>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<section id="teams" class="games-teams bg-dark text-light">
  <div class="container">
    <div class="row">
      <div class="col">
        <h2>Štatistika prihlásených</h2>
        <p>Celkový počet aktuálne prihlásených: <?= $peoplecount['all'] ?> | Súťažiaci: <?= $peoplecount['sport'] ?> | Nesúťažiaci: <?= $peoplecount['nosport'] ?></p>
      </div>
    </div>
    <div class="row">
      <?php foreach($sports as $sport): ?>
        <div class="col-xs-12 col-sm-6 col-lg-3">
          <h3 class="sportname"><?= $sport['name'] ?></h3>
          <div class="accordion" id="<?= 'accordion'.$sport['title'] ?>">
            <?php foreach($teams as $team): ?>
              <?php if($team->sport->id == $sport['id']): ?>
                <div class="card">
                  <div class="card-header" id="<?= 'team'.$team->id ?>">
                    <h5 class="mb-0">
                      <button class="btn btn-link" type="button" data-toggle="collapse" data-target="<?= '#collapseTeam'.$team->id ?>" aria-expanded="false" aria-controls="<?= 'collapseTeam'.$team->id ?>">
                        <?= $team->name ?> (<?= $playersCount[$team->id] ?>)
                      </button>
                    </h5>
                  </div>
                  <div id="<?= 'collapseTeam'.$team->id ?>" class="collapse" aria-labelledby="<?= 'headingTeam'.$team->id ?>" data-parent="<?= '#accordion'.$sport['title'] ?>">
                    <div class="card-body">
                      <?php foreach($players as $player): ?>
                        <?php if ($player['team_id'] == $team->id): ?>
                          <span class="text-light"><?= $player['first_name'].', ' ?></span>
                        <?php endif; ?>
                      <?php endforeach; ?>
                    </div>
                  </div>
                </div>
              <?php endif; ?>
            <?php endforeach; ?>
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
<!-- 
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
<script src="https://www.google.com/recaptcha/api.js" async defer></script> -->