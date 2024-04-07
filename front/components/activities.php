<?php require('../back/activitiesData.php'); ?>

<div id="activities">
    <h2>Activites a Marseille</h2>
    <?php for ($i = 0; $i < count($activites); $i++) : ?>
        <?php if ($i % 3 == 0) { ?>
            <a href="#" class="activity-card">
                <img src=<?php echo "./assets/images/activites/medium/" . $activites[$i]->image ?> alt=<?php $activites[$i]->image ?>>
                <h4><?php $activites[$i]->image ?></h4>
            </a>
        <?php } else { ?>
            <div class="activity-column">
                <a href="#">
                    <img src=<?php echo "./assets/images/activites/small/" . $activites[$i]->image ?> alt=<?php $activites[$i]->image ?>>
                    <h4><?php $activites[$i]->image ?></h4>
                </a>
            </div>
        <?php } ?>
    <?php endfor ?>
</div>