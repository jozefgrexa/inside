<!-- Navigation -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNavbar">
    <div class="container">
        <?= $this->cell('Logo') ?>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarMain" aria-controls="navbarMain" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarMain">
            <ul class="navbar-nav ml-auto">
                <?php foreach($menuItems as $menuItem): ?>
                    <li class="nav-item <?= $menuItem['class'] ?>">
                        <div class="left-caret"></div>
                        <a class="nav-link top-item" id="<?= $menuItem['name'] ?>"><?= $menuItem['title'] ?></a>
                    </li>
                <?php endforeach; ?>
            </ul>
        </div>
    </div>
</nav>
<nav class="navbar navbar-expand-lg navbar-light bg-light sub-navbar fixed-top" id="subNavbar">
    <div class="container">
        <div id="navbarSub" class="navbar-collapse">
            <?php foreach($menuItems as $menuItem): ?>
              <ul id="sub-<?= $menuItem['name'] ?>" class="navbar-nav ml-auto">
                <?php foreach($menuItem['subfields'] as $subname => $subfield): ?>
                    <li class="nav-item">
                        <span class="oi nav-icon" data-glyph="<?= $subfield['icon'] ?>" aria-hidden="true"></span><a class="nav-link" href="<?= $menuItem['url'] ?>#<?= $subname ?>"><?= $subfield['text'] ?></a>
                    </li>
                <?php endforeach; ?>
              </ul>
            <?php endforeach; ?>
        </div>
        <div id="close-sub-menu" class="form-inline">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <div class="nav-link"><span class="oi" data-glyph="x" aria-hidden="true"></span></div>
                </li>
            </ul>
        </div>
    </div>
</nav>