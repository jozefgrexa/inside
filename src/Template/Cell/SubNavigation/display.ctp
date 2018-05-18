<div class="container">
  <nav class="navbar navbar-default" role="navigation" id="submenu">
    <?php foreach($menuItems as $menuItem): ?>
      <ul class="nav navbar-nav collapse" id="<?= $menuItem['title'] ?>">
        <?php foreach(): ?>
          <li><a href="#" id="">One sub 1</a></li>
        <?php endforeach; ?>
      </ul>
    <?php endforeach; ?>
  </nav>
</div>