<?php $this->layout = 'results'; ?>

<div class="container-fluid">
  <div class="row">
    <div class="col-sm-6 border">
      <h2>Futbal</h2>
      <div class="row">
        <div class="col">
          <h4 class="mb-3 mt-3">Rozpis zápasov</h4>
          <table class="table table-sm">
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
          <div class="row">
            <div class="col-md-6">
              <h4>Stav série</h4>
              <table class="table">
                <tbody>
                  <?php foreach ($footballSerie as $team => $score): ?>
                    <tr>
                      <th><?= $team ?></th>
                      <td><?= $score ?></td>
                    </tr>  
                  <?php endforeach; ?>  
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-sm-6 border">
      <h2>Florbal</h2>
      <div class="row">
        <div class="col">
          <h4 class="mb-3 mt-3">Rozpis zápasov</h4>
          <table class="table table-sm">
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
              <h4>Tabuľka</h4>
              <table class="table table-sm">
                <thead>
                  <tr>
                    <th scope="col">Tím</th>
                    <th scope="col">Skóre</th>
                    <th scope="col">+/-</th>
                    <th scope="col">Body</th>
                  </tr>
                </thead>
                <tbody>
                  <?php foreach ($floorballTable as $key => $team): ?>
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
        </div>
      </div>
    </div>
  </div>
  <div class="row">
    <div class="col-sm-6 border">
      <h2>Volejbal</h2>
      <div class="row">
        <div class="col">
          <h4 class="mb-3 mt-3">Rozpis zápasov</h4>
          <table class="table table-sm">
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
          <div class="row">
            <div class="col">
              <h4>Tabuľka</h4>
              <table class="table table-sm">
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
                    <td><?= ($team['score1']-$team['score2']) > 0 ? '+'.($team['score1']-$team['score2']) : ($team['score1']-$team['score2']) ?></td>
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
    <div class="col-sm-6 border">
      <h2>Vybijana</h2>
      <div class="row">
        <div class="col">
          <h4 class="mb-3 mt-3">Rozpis zápasov</h4>
          <table class="table table-sm">
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
          <div class="row">
            <div class="col">
              <h4>Tabuľka</h4>
              <table class="table table-sm">
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
                    <td><?= ($team['score1']-$team['score2']) > 0 ? '+'.($team['score1']-$team['score2']) : ($team['score1']-$team['score2']) ?></td>
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
  </div>
</div>
