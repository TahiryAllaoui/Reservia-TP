<?php require('../back/activitiesData.php'); ?>

<div id="activities">
  <h2>Activites a Marseille</h2>
  <div class="activity-item">
    <?php for ($i = 0; $i < count($activites); $i++) : ?>
      <a href="#" class=<?php ($i % 3 != 0) ? print("activity-card" . "-" . "duo") : print("activity-card" . "-" . "solo") ?>>
        <div class="image-1">
          <img src=<?php echo "./assets/images/activites/small/" . $activites[$i]->image ?> alt=<?php $activites[$i]->image ?>>
          <h4><?php echo $activites[$i]->name ?></h4>
        </div>
        <?php if ($i % 3 != 0) : ?>
          <div class="image-1">
            <img src=<?php echo "./assets/images/activites/small/" . $activites[$i + 1]->image ?> alt=<?php $activites[$i]->image ?>>
            <h4><?php echo $activites[$i + 1]->name ?></h4>
            <?php $i++ ?>
          </div>
        <?php endif ?>
      </a>
    <?php endfor ?>
  </div>
</div>