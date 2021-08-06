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
          <?php foreach($pages->listed() as $item): ?>
            <a class="list-item" href="<?= $item->url() ?>">
              <img class="list-img" src="<?= $item->preview()->url() ?>" alt="">
            </a>
          <?php endforeach ?>


          <a class="list-item" href="#">
            <img class="list-img" src="https://www.nbk.org/images/current/img_C_201709121100_510_5.jpg" alt="">
            <div class="list-title"><p>「O.T. 976」</p></div>
            <div class="list-info"><p>
              O.T. 976 consists of three large metal frames in which 39 ship ropes were fixed.
              O.T. 976 consists of three large metal frames in which 39 ship ropes were fixed.
              O.T. 976 consists of three large metal frames in which 39 ship ropes were fixed.
              O.T. 976 consists of three large metal frames in which 39 ship ropes were fixed.
              O.T. 976 consists of three large metal frames in which 39 ship ropes were fixed.
            </p></div>
          </a>

        </div>
      </div>

      <div class="status">

      </div>

    </div>
  </div>



  <?php snippet('menu') ?>

</div>


<?php snippet('footer') ?>
