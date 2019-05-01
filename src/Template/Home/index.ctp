<?php

$this->viewBuilder()->setLayout('default');

?>

<!-- <section class="home-big-picture" style="background-image: url('webroot/img/home/home-bg-pic.jpg');">
  <div class="container">
    <div class="row justify-content-end">
      <div class="col-lg-6 text-right">
        <img src="webroot/img/home/home-header-logo.png"/>
        <p class="lead">To na čom najviac záleží je ukryté vo vnútri</p>
      </div>
    </div>
  </div>
</section> -->

<header>
  <div id="carousel-switch" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#carousel-switch" data-slide-to="0"></li>
      <li data-target="#carousel-switch" data-slide-to="1"></li>
      <li data-target="#carousel-switch" data-slide-to="2" class="active"></li>
    </ol>
    <div class="carousel-inner" role="listbox">
      <!-- Slide One - Set the background image for this slide in the line below -->
      <div class="carousel-item" style="background-image: url('<?= $this->Url->image('home/slider-bg-01.jpg') ?>')">
        <div class="carousel-caption">
          <?= $this->Html->image('home/home-header-logo.png', ['alt' => 'inside logo', 'class' => 'img-fluid m-3']) ?>
          <h3>To na čom najviac záleží je ukryté vo vnútri</h3>
        </div>
      </div>
      <!-- Slide Two - Link to Facebook group-->
      <div class="carousel-item" style="background-image: url('<?= $this->Url->image('home/slider-bg-03.jpg') ?>')">
        <div class="carousel-caption">
          <?= $this->Html->image('home/home-header-logo.png', ['alt' => 'inside logo', 'class' => 'img-fluid m-3']) ?>
          <h3>Viac fotiek nájdeš v našej <a href="https://www.facebook.com/groups/128360077233101/" target="_blank" class="text-white font-italic">Facebookovej skupine</a>.</h3>
        </div>
      </div>

      <!-- Slide Three - Set the background image for this slide in the line below -->
      <div class="carousel-item active" style="background-image: url('<?= $this->Url->image('weekend/miesta_zmeny_bg.jpg') ?>')">
        <div class="row">
          <div class="col-sm-11 col-md-10 col-lg-8 mx-auto">
            <?= $this->Html->link($this->Html->image('weekend/miesta_zmeny_title.png', ['alt' => 'miesta zmeny inside vikend', 'class' => 'img-fluid mt-5 pt-5']), ['controller' => 'weekend', 'action' => 'index'], ['class' => 'd-block', 'escape' => false]) ?>
          </div>
        </div>
      </div>
    </div>
    <a class="carousel-control-prev" href="#carousel-switch" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carousel-switch" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</header>

<section id="about">
  <div class="container">
    <div class="row">
      <div class="col-lg-8 mx-auto">
        <h2>Podstatné je vo vnútri</h2>
        <p class="lead">Platí to o banánoch a orechoch a platí to aj o ľuďoch. Často sa zameriavame na tie menej podstatné veci, tie ktoré potešia naše zmysly. INSIDE je tu na to, aby nám pomohol upriamiť pohľad dovnútra. Pod povrch. Lebo tam je to podstatné - ľudské srdce, duch človeka. A na tom záleží najviac.</p>
        <p>INSIDE sú:</p>
        <ul>
          <li>Priateľstvá a vzťahy položené na dobrých základoch</li>
          <li>Stretnutia, víkendovky, kluby, tábor, games a iné</li>
          <li>Biblické pravdy (aj) pre dnešných mladých ľudí</li>
          <li>Dobrodružstvá, zábava, hudba, spev, šport a všeličo ďalšie</li>
        </ul>
      </div>
    </div>
  </div>
</section>

<!-- <section id="testimony" class="bg-light">
  <div class="container">
    <div class="row">
      <div class="col-lg-8 mx-auto">
        <h2>Svedectvá</h2>
        <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut optio velit inventore, expedita quo laboriosam possimus ea consequatur vitae, doloribus consequuntur ex. Nemo assumenda laborum vel, labore ut velit dignissimos.</p>
      </div>
    </div>
  </div>
</section> 

<section id="calendar" class="calendar-big-picture" style="background-image: url('webroot/img/home/calendar-bg-pic.jpg');">
  <div class="container">
    <div class="row">
      <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
        <?= $this->Html->image('home/calendar-01.png', ['alt' => 'calendar-event', 'class' => 'img-fluid']) ?>
      </div>
      <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
        <?= $this->Html->image('home/calendar-02.png', ['alt' => 'calendar-event', 'class' => 'img-fluid']) ?>
      </div>
      <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
        <?= $this->Html->image('home/calendar-03.png', ['alt' => 'calendar-event', 'class' => 'img-fluid']) ?>
      </div>
      <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
        <a href="<?= $this->Url->build(['controller' => 'Games', 'action' => 'index'])?>"><?= $this->Html->image('home/calendar-04.png', ['alt' => 'games-event', 'class' => 'img-fluid']) ?></a>
      </div>
      <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
        <a href="<?= $this->Url->build(['controller' => 'Camp', 'action' => 'index'])?>"><?= $this->Html->image('home/calendar-05.png', ['alt' => 'camp-event', 'class' => 'img-fluid']) ?></a>
      </div>
      <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
        <?= $this->Html->image('home/calendar-06.png', ['alt' => 'calendar-event', 'class' => 'img-fluid']) ?>
      </div>
      <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
        <?= $this->Html->image('home/calendar-07.png', ['alt' => 'calendar-event', 'class' => 'img-fluid']) ?>
      </div>
      <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
        <?= $this->Html->image('home/calendar-08.png', ['alt' => 'calendar-event', 'class' => 'img-fluid']) ?>
      </div>
      <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
        <?= $this->Html->image('home/calendar-09.png', ['alt' => 'calendar-event', 'class' => 'img-fluid']) ?>
      </div>
  </div>
</section>-->

<section id="calendar-19">
  <img src="webroot/img/home/inside_2019.jpg" class="img-fluid">
</section>

<section id="contact">
  <div class="container">
    <div class="row">
      <div class="col-lg-8 mx-auto">
        <h2>Kontakt</h2>
        <p class="lead">INSIDE zastrešuje <a href="http://www.sem.sk" target="_blank">Spoločenstvo evanjelickej mládeže (OZ)</a>. Deje sa hlavne v bratislavskom a trnavskom kraji v spolupráci s <a href="https://www.facebook.com/BAsenioratECAV/" target="_blank">Bratislavským seniorátom ECAV</a>. Je veľa ľudí, ktorým by stálo za to napísať a ktorí by ti nerozprávali o INSIDE, ale sa zaujímali skôr o teba. Ale najlepšie bude, keď začneš tu: <strong>inside@sem.sk</strong>. Alebo môžeš skúsiť aj na <a href="https://www.facebook.com/groups/128360077233101/" target="_blank">FB (skupina INSIDE)</a>.</p>
        <p>Každopádne sa potešíme, ak sa ozveš</p>
      </div>
    </div>
  </div>
</section>