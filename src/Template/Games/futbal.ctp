<section id="matches">
  <div class="container">
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
</section>
