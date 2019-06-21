<section id="matches">
  <div class="container">
    <h2>Rozpisy a výsledky</h2>
    <div class="row mt-3">
      <?php foreach ($volleyball as $match): ?>
        <div class="col-md-6 col-lg-4">
          <div class="card mb-3">
            <?= $this->Form->create($match) ?>
              <?= $this->Form->hidden('id', ['value' => $match->id]) ?>
              <div class="card-header">
                <h4><?= $match['time']?> | <?= $match['ground']?></h4>
                <small><?= $match['comment']?></small>
              </div>
              <div class="card-body">
                <h5><?= $match['team1'] ?></h5>
                <div class="input-group mb-3">
                  <div class="input-group-prepend">
                    <span class="input-group-text">Skóre</span>
                  </div>
                  <?= $this->Form->text('score1', ['class' => 'form-control', 'label' => false]) ?>
                  <div class="input-group-prepend">
                    <span class="input-group-text">Body</span>
                  </div>
                  <?= $this->Form->text('points1', ['class' => 'form-control', 'label' => false]) ?>
                </div>
                <h5><?= $match['team2'] ?></h5>
                <div class="input-group mb-3">
                  <div class="input-group-prepend">
                    <span class="input-group-text">Skóre</span>
                  </div>
                  <?= $this->Form->text('score2', ['class' => 'form-control', 'label' => false]) ?>
                  <div class="input-group-prepend">
                    <span class="input-group-text">Body</span>
                  </div>
                  <?= $this->Form->text('points2', ['class' => 'form-control', 'label' => false]) ?>
                </div>
                <?= $this->Form->button('Ulož', ['class' => 'btn btn-block btn-primary']) ?>
              </div>
            <?= $this->Form->end() ?>  
          </div>  
        </div>
      <?php endforeach; ?>  
    </div>
  </div>
</section>