<?php require('../back/hebergementData.php') ?>

<div id="hebergement">
  <div id="main-article">
    <h2>Hebergements a Marseille</h2>
    <div class="hotels">
      <?php for ($index = 0; $index < count($hotels); $index++) : ?>
        <?php if (!($hotels[$index]->isPopular)) { ?>
          <a href=<?php echo "./reservation.php?index=" . $index ?> class="card">
            <img src=<?php echo "./assets/images/hebergements/medium/" . $hotels[$index]->image ?> alt=<?php echo $hotels[$index]->name ?>>
            <h4><?php echo $hotels[$index]->name ?></h4>
            <p>Nuit a partir de <strong><?php echo $hotels[$index]->price . "$" ?></strong></p>
            <div class="note">
              <?php for ($i = 1; $i <= 5; $i++) { ?>
                <?php if ($i <= $hotels[$index]->note) { ?>
                  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                    <path fill="#0065FC" d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z" />
                  </svg>
                <?php } else { ?>
                  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                    <path fill="#d7d7d7" d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z" />
                  </svg>
                <?php } ?>
              <?php } ?>
            </div>
          </a>
        <?php } ?>
      <?php endfor ?>
    </div>
    <h4 style="cursor: pointer;">Afficher plus</h4>
  </div>
  <div id="side-article">
    <h3>
      <span>Les plus populaires</span>
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
        <path d="M64 64c0-17.7-14.3-32-32-32S0 46.3 0 64V400c0 44.2 35.8 80 80 80H480c17.7 0 32-14.3 32-32s-14.3-32-32-32H80c-8.8 0-16-7.2-16-16V64zm406.6 86.6c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0L320 210.7l-57.4-57.4c-12.5-12.5-32.8-12.5-45.3 0l-112 112c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0L240 221.3l57.4 57.4c12.5 12.5 32.8 12.5 45.3 0l128-128z" />
      </svg>
    </h3>
    <div class="popular-hotels">
      <?php for ($index = 0; $index < count($hotels); $index++) : ?>
        <?php if ($hotels[$index]->isPopular) { ?>
          <a href=<?php echo "./components/reservation.php?index=" . $index ?> class="side-card">
            <img src=<?php echo "./assets/images/hebergements/small/" . $hotels[$index]->image ?> alt=<?php echo $hotels[$index]->name ?>>
            <div class="side-note">
              <h4><?php echo $hotels[$index]->name ?></h4>
              <p>Nuit a partir de <strong><?php echo $hotels[$index]->price . "$" ?></strong></p>
              <div class="note">
                <?php for ($i = 1; $i <= 5; $i++) { ?>
                  <?php if ($i <= $hotels[$index]->note) { ?>
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                      <path fill="#0065FC" d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z" />
                    </svg>
                  <?php } else { ?>
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                      <path fill="#d7d7d7" d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z" />
                    </svg>
                  <?php } ?>
                <?php } ?>
              </div>
            </div>
          </a>
        <?php } ?>
      <?php endfor ?>
    </div>
  </div>
</div>