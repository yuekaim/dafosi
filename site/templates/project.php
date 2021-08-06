<?php snippet('header') ?>

<div class="page">

  <?php snippet('title') ?>

  <div class="middle">
    <?php snippet('announcements') ?>

    <div class="main">

        <div class="project-info">
          <div class="list-title project-title project-info-block"><p><?= $page->name() ?></p></div>
          <div class="project-info-block">
            <p><?= $page->time() ?></p>
            <p><?= $page->place() ?></p>
          </div>
          <div class="project-info-block">
            <p><?= $page->tags() ?></p>
          </div>
          <div class="project-info-block artist">
            <p><?= $page->artist() ?></p>
          </div>

        </div>

        <div class="flex-row project-main">
          <div class="project-text-wrapper">
            <div class="project-text">
              <?= $page->main() ?>
            </div>
          </div>
          <div class="other-info flex-column">
            <div class="">

            </div>
          </div>
        </div>


    </div>
  </div>



  <?php snippet('menu') ?>

</div>


<?php snippet('footer') ?>
