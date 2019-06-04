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

<section id="info">
  <div class="container">
    <div class="row">
      <div class="col-lg-8 mx-auto">
        <h2>11-18.august 2019 | Planinka, Dechtice</h2>
        <p class="h4 my-5">Zážitkové pobytové podujatie zamerané na <strong>budovanie vzťahov, charakteru jednotlivca a rast v osobnom vzťahu s Bohom</strong> určené pre <strong>dorast vo veku 12-17 rokov</strong>.</p>
        <p class="lead">Rekreačné zariadenie Planinka, ubytovanie v 2, 3 a 4-posteľových izbách v hlavnej budove so zrekonštruovanými sociálnymi zariadeniami na chodbe, prípadne na 4-posteľových chatkách s vlastnými sociálnymi zariadeniami. Stravovanie 5x denne a pitný režim sú zabezpečené.</p>
      </div>
    </div>
  </div>
</section>

<section id="program" style="background-image: url('<?= $this->Url->image('camp/biblengers_back.jpg') ?>')">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <h2 class="text-white">Náčrt programu dňa</h2>
        <p class="lead text-white">ale každý deň bude niečím špeciálny, čiže sa iste neboj stereotypu</p>
      </div>
    </div>
    <div class="row">
      <div class="col-md-6 mt-3 text-white">
        <h4>7:30 Osobné stíšenia</h4>
        <small>Kto chce si môže privstať a mať svoj osobný čas s Bohom</small><hr/>
        <h4>8:00 Rozcvička</h4>
        <small>Akčná, veselá a niekedy aj pojašená</small><hr/>
        <h4>8:15 Raňajky</h4><hr/>
        <h4>9:00 Výcvik :)</h4>
        <small>Doobedné spoločenstvo, čítanie Biblie a skupinky</small><hr/>
        <h4>10:30 CTRŠT</h4>
        <small>Celo-táborový-rôzno-športový-turnaj</small><hr/>
      </div>
      <div class="col-md-6 mt-3 text-white">
        <h4>12:30 Obed + poobedné voľno</h4>
        <small>Bufet, rozhovory, športy, pohoda</small><hr/>
        <h4>14:30 Hra </h4>
        <small>Väčšinou nejaká tímová veľká hra</small><hr/>
        <h4>18:00 Večera</h4><hr/>
        <h4>19:30 Večerný program</h4>
        <small>Piesne, scénky, videá, hry, modlitby, svedectvá a iné </small><hr/>
        <h4>22:30 Večierka</h4><hr/>
      </div>
    </div>
  </div>
</section>

<!-- <section id="theme">
  <div class="container">
    <div class="row">
      <div class="col text-center">
        <?= $this->Html->image('camp/header_theme.png', ['alt' => 'camp-logo', 'class' => 'img-fluid']) ?>
      </div>
    </div>
    <div class="row">
      <div class="col">
        <p class="lead">Kadý tábor má svoju tému, okolo ktorej sa točia všetky ostatné veci na tábore! Aj tento rok chystáme dobrodružstvo a veľa zábavy a na téme momentálne pracujeme. Na tomto mieste sa ju časom dozvieš.</p>
      </div>
    </div>
  </div>
</section> -->

<section id="price" class="bg-dark">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <h2 class="text-white">Vyber si, koľko zaplatíš</h2>
        <p class="lead text-white">Každý máme iné možnosti. Niekto potrebuje zľavu a niekto môže zasa trochu prispieť. Preto sme sa rozhodli dať ti na výber, koľko za tábor zaplatíš - svoju cenu si vyber v prihlasovacom formulári nižšie.</p>
      </div>
    </div>
    <div class="row">
      <div class="col-md-4 text-white">
        <div class="bg-light text-dark m-3 p-3 text-center">
          <h1>100 €</h1>
          <h5>zľavnená cena</h5><hr/>
          <p>Ak potrebuješ zľavu, pokojne si vyber túto cenu. Rozumieme tomu a radi ti na tábor prispejeme.</p>
        </div>
      </div>
      <div class="col-md-4 text-white">
        <div class="bg-primary m-3 p-3 text-center">
          <h1>125 €</h1>
          <h5>štandardná cena</h5><hr/>
          <p>Toto je štandardný poplatok, ktorý približne pokryje náklady na jedného účastníka.</p>
        </div>
      </div>
      <div class="col-md-4 text-white">
        <div class="bg-light text-dark m-3 p-3 text-center">
          <h1>150 €</h1>
          <h5>sponzorská cena</h5><hr/>
          <p>Výberom tejto ceny prispeješ na tábor okrem seba aj niekomu inému. Ak môžeš, budeme veľmi vďační.</p>
        </div>
      </div>
    </div>
    <div class="row mt-4">
      <div class="col-md-12">
        <button class="btn btn-success btn-block" data-toggle="modal" data-target="#priceInfo">
          <h5>Na čo tie peniaze používame?</h5>
        </button>
      </div>
    </div>
  </div>

  <div class="container">
    <div class="row mt-5">
      <div class="col-md-12">
        <h2 class="text-white">Postup pri prihlásení</h2>
      </div>
    </div>
    <div class="row">
      <div class="col-sm-6 col-md-6 col-lg-3">
        <div class="bg-light m-3 p-3 text-center">
          <h1>1.</h1>
          <h5>Prihlásenie<br/>na webe</h5>
          <a href="#signup" class="btn btn-primary mt-3">Prihlasovací formulár</a>
        </div>
      </div>
      <div class="col-sm-6 col-md-6 col-lg-3">
        <div class="bg-light m-3 p-3 text-center">
          <h1>2.</h1>
          <h5>Platba<br/>zálohy</h5>
          <button class="btn btn-primary mt-3" data-toggle="modal" data-target="#payment">Informácie k platbe</button>
        </div>
      </div>
      <div class="col-sm-6 col-md-6 col-lg-3">
        <div class="bg-light m-3 p-3 text-center">
          <h1>3.</h1>
          <h5>Podpísané<br/>podmienky účasti</h5>
          <button class="btn btn-primary mt-3" data-toggle="modal" data-target="#papers">Podmienky účasti</button>
        </div>
      </div>
      <div class="col-sm-6 col-md-6 col-lg-3">
        <div class="bg-light m-3 p-3 text-center">
          <h1>4.</h1>
          <h5>Registrácia<br/>na mieste</h5>
          <button class="btn btn-primary mt-3" data-toggle="modal" data-target="#regInfo">Informácie</button>
        </div>
      </div>
    </div>
  </div>
</section>

<section id="signup">
  <div class="container">
    <h2>Prihlasovací formulár</h2>
    <p class="lead">Kapacita tábora je obmedzená na 100 účastníkov - prihlás sa čím skôr.</p>
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
          <input type="date" class="form-control" id="birthday" placeholder="" min="1900-01-01" max="2019-08-11" name="birthday" required>
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

      <div class="form-row">
        <div class="col-md-6 mb-3">
          <label for="price-select">Vyber svoj poplatok za tábor <a href="#price"><i class="fas fa-question-circle"></i></a></label>
          <select class="form-control" id="price-select" name="payment">
            <option value="100">100 € - zľavnená cena</option>
            <option value="125" selected>125 € - štandardná cena</option>
            <option value="150">150 € - spoznorská cena</option>
          </select>
        </div>
        <div class="col-md-4 ml-3">
          <div class="form-group">
            <div class="form-check">
              <input class="form-check-input" type="checkbox" value="1" id="discount" name="discount">
              <label class="form-check-label" for="discount">
                Potrebujem ešte väčšiu zľavu <a href="#" data-toggle="modal" data-target="#discountInfo"><i class="fas fa-question-circle"></i></a>
              </label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="checkbox" value="1" id="sponsor" name="sponsor">
              <label class="form-check-label" for="sponsor">
                Rád by som prispel ešte viac <a href="#" data-toggle="modal" data-target="#sponsorInfo"><i class="fas fa-question-circle"></i></a>
              </label>
            </div>
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
  <div class="container-fluid">
    <div class="row">
      <div class="col text-center">
        <h2>Je to o priateľstvách! Takto nám bolo minulý rok...</h2>
      </div>
    </div>
    <div class="row">
      <div class="col-xs-12 col-sm-6 col-md-4 p-0">
        <img src="webroot/img/camp/photos-2018/photo-01.jpg" alt="INSIDE Tábor 2018" class="img-fluid m-0" />
        <img src="webroot/img/camp/photos-2018/photo-02.jpg" alt="INSIDE Tábor 2018" class="img-fluid m-0" />
        <img src="webroot/img/camp/photos-2018/photo-04.jpg" alt="INSIDE Tábor 2018" class="img-fluid m-0" />
        <img src="webroot/img/camp/photos-2018/photo-05.jpg" alt="INSIDE Tábor 2018" class="img-fluid m-0" />
        <img src="webroot/img/camp/photos-2018/photo-06.jpg" alt="INSIDE Tábor 2018" class="img-fluid m-0" />
        <img src="webroot/img/camp/photos-2018/photo-07.jpg" alt="INSIDE Tábor 2018" class="img-fluid m-0" />
      </div>
      <div class="col-xs-12 col-sm-6 col-md-4 p-0">
        <img src="webroot/img/camp/photos-2018/photo-08.jpg" alt="INSIDE Tábor 2018" class="img-fluid m-0" />
        <img src="webroot/img/camp/photos-2018/photo-09.jpg" alt="INSIDE Tábor 2018" class="img-fluid m-0" />
        <img src="webroot/img/camp/photos-2018/photo-10.jpg" alt="INSIDE Tábor 2018" class="img-fluid m-0" />
        <img src="webroot/img/camp/photos-2018/photo-03.jpg" alt="INSIDE Tábor 2018" class="img-fluid m-0" />
        <img src="webroot/img/camp/photos-2018/photo-11.jpg" alt="INSIDE Tábor 2018" class="img-fluid m-0" />
        <img src="webroot/img/camp/photos-2018/photo-12.jpg" alt="INSIDE Tábor 2018" class="img-fluid m-0" />
        <img src="webroot/img/camp/photos-2018/photo-13.jpg" alt="INSIDE Tábor 2018" class="img-fluid m-0" />
      </div>
      <div class="col-xs-12 col-sm-6 col-md-4 p-0">
        <img src="webroot/img/camp/photos-2018/photo-21.jpg" alt="INSIDE Tábor 2018" class="img-fluid m-0" />
        <img src="webroot/img/camp/photos-2018/photo-16.jpg" alt="INSIDE Tábor 2018" class="img-fluid m-0" />
        <img src="webroot/img/camp/photos-2018/photo-18.jpg" alt="INSIDE Tábor 2018" class="img-fluid m-0" />
        <img src="webroot/img/camp/photos-2018/photo-19.jpg" alt="INSIDE Tábor 2018" class="img-fluid m-0" />
        <img src="webroot/img/camp/photos-2018/photo-20.jpg" alt="INSIDE Tábor 2018" class="img-fluid m-0" />
        <img src="webroot/img/camp/photos-2018/photo-14.jpg" alt="INSIDE Tábor 2018" class="img-fluid m-0" />
      </div>
    </div>
  </div>
</section>

<div class="modal fade" id="priceInfo" tabindex="-1" role="dialog" aria-labelledby="priceInfoLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="priceInfoLabel">Na čo tie peniaze používame?</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <p>Suma za ubytovanie a stravu pre jedného účastníka sa hýbe okolo 115 €. Ďalšie náklady sú hlavne: prenájom programových stanov a nafukovacieho vodného futbalu, športové, kancelárske a technické potreby pre zabezpečenie programu, táborové tričká a odmeny pre víťazov v hrách a športoch. Taktiež prispievame na tábor účastníkom, ktorí si to nemôžu finančne dovoliť a podľa možností časť poplatku za ubytovanie a stravu hradíme tímu dobrovoľníkov, ktorí tábor realizujú a štandardne si všetky náklady hradia sami.</p>
        <p>Zároveň sa snažíme cenu tábora nastaviť tak, aby bol dostupný pre každého. Ako občianske združenie Spoločenstvo evanjelickej mládeže máme na tábor dotáciu 500 € aj z Ministerstva školstva cez program podpory administrovaný IUVENTOU. Minuloročný tábor stál približne 12 500 € / 100 účastníkov a aby sme ho mohli zaplatiť potrebovali sme približne 1000 € v sponzorských príspevkoch.</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Zatvoriť</button>
      </div>
    </div>
  </div>
</div>
<div class="modal fade" id="discountInfo" tabindex="-1" role="dialog" aria-labelledby="priceInfoLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="priceInfoLabel">Potrebujem ešte väčšiu zľavu</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <p>Ak je tábor pre teba napriek zľave veľmi drahý, alebo chcete ísť viacerí súrodenci a pre vašu rodinu je to príliš vysoká položka, zaškrtni toto políčko a my sa ti ozveme. Ak by v ceste tvojej účasti na tábore mali stáť iba financie, bola by to škoda.</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Zatvoriť</button>
      </div>
    </div>
  </div>
</div>
<div class="modal fade" id="sponsorInfo" tabindex="-1" role="dialog" aria-labelledby="priceInfoLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="priceInfoLabel">Rád by som prispel ešte viac</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <p>Ak chceš (resp. tvoji rodičia) podporiť tábor a projekt INSIDE finančne ešte viac, zaškrtni toto políčko a my sa ti ozveme. Za každý dar a príspevok sme veľmi vďační a máme kopu možností ako ho zmysluplne využiť.</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Zatvoriť</button>
      </div>
    </div>
  </div>
</div>
<div class="modal fade" id="payment" tabindex="-1" role="dialog" aria-labelledby="paymentLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="paymentLabel">Informácie k platbe za tábor</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <p>Aby bolo tvoje prihlásenie kompletné, <string>do 15.júla</string> je potrebné zaplatiť <strong>zálohu 70 €</strong> alebo <strong>plnú sumu</strong> poplatku za tábor.</p>
        <p>Zaplatiť je možné prevodom na účet:
        <br/><strong>IBAN:</strong> SK63 0900 0000 0000 8212 9157
        <br/><strong>Variabilný symbol:</strong> 11180819
        <br/><strong>Správa pre adresáta:</strong> meno a priezvisko účastníka</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Zatvoriť</button>
      </div>
    </div>
  </div>
</div>
<div class="modal fade" id="papers" tabindex="-1" role="dialog" aria-labelledby="papersLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="papersLabel">Podmienky účasti</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <p>Prečítaj si podmienky účasti na tábore. Poslednú stranu treba vytlačiť a <strong>vyplnenú a podpísanú priniesť na tábor</strong>.</p>
        <p>V dokumente nájdeš informácie o organizácií tábora ako aj poučenie o spracovaní osobných údajov.</p>
        <?= $this->Html->link('Stiahni PDF', '/storage/IT2019_VseobecnePodmienky2019.pdf', [ 'class' => 'btn btn-danger btn-block mt-3']) ?>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Zatvoriť</button>
      </div>
    </div>
  </div>
</div>
<div class="modal fade" id="regInfo" tabindex="-1" role="dialog" aria-labelledby="regInfoLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="regInfoLabel">Registrácia na tábore</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <p>V deň príchodu na tábor <strong>v nedeľu 11.8.</strong> prebieha registrácia v čase <strong>16:00-18:00</strong>. Doprava na tábor je <strong>individuálna</strong></p>
        <p>Pri registrácií sa podpíšeš do prezenčnej listiny, odovzdáš podpísané podmienky účasti a zaplatíš zvyšok sumy za tábor (ak si dopredu zaplatil iba zálohu) - dá sa platiť iba v hotovosti.</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Zatvoriť</button>
      </div>
    </div>
  </div>
</div>

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