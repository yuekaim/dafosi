<?php snippet('header') ?>

<div class="page">

  <?php snippet('title') ?>

  <div class="middle">
    <?php snippet('announcements') ?>

    <div class="main">
      <div class="type">
        <button class="type-item">绘画</button>
        <button class="type-item">音频</button>
      </div>

      <div class="list">
        <div class="list-inside">
          <?php $i = 0; ?>
          <?php foreach($pages->listed() as $item): ?>

              <a class="<?php if($i % 2 !== 0) echo "list-right"; ?> list-item" href="<?= $item->url() ?>">
                <img class="list-img" src="<?= $item->preview()->toFile()->url() ?>" alt="">
                <div class="list-title"><p><?= $item->name() ?></p></div>
                <div class="list-info"><p><?= $item->intro()->kirbytext() ?></p></div>
              </a>


            <?php $i++ ?>
          <?php endforeach ?>

        </div>
      </div>

      <div class="status">

      </div>

    </div>
  </div>



  <?php snippet('menu') ?>

</div>


<?php snippet('footer') ?>
