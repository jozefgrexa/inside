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
                <option value="<?= $team->id ?>">
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
                <option value="<?= $team->id ?>">
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
