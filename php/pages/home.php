<?php require "php/modules/open.php"; ?>
<div class="home bg1">
  <div class="bg_main"></div>
  <div id="media"></div>

  <div class="bottom">
    <div class="warnings">
      <div><i class="bi bi-flower1"></i> <?= $lang_data[$lang_number]["home"]["garden"]; ?></div>
      <div><i class="bi bi-patch-check-fill"></i> <?= $lang_data[$lang_number]["home"]["dog"]; ?></div>
      <div><i class="bi bi-credit-card-2-back-fill"></i> <?= $lang_data[$lang_number]["home"]["ccard"]; ?></div>
    </div>
  </div>
</div>

<div class="welcome g0">
  <h1 class="title">Rab Ráby <?= $lang_data[$lang_number]["restaurant"]; ?>, Szentendre (<?= $lang_data[$lang_number]["since"]; ?>)</h1>

  <div class="open only_pc">
    <div><i class="bi bi-door-open-fill"></i></div>
    <?php PrintOpen($api, $lang_data, $lang_number); ?>
  </div>

  <div>
    <div class="only_pc"><i class="bi bi-cup-hot-fill"></i></div>
    <p><?= $lang_data[$lang_number]["home"]["welcome"]; ?></p>
  </div>

  <div class="parking only_pc">
    <a href="parking">
      <div><i class="bi bi-p-circle-fill"></i></div>
      <p><?= $lang_data[$lang_number]["home"]["parking"]; ?></p>
    </a>
  </div>
  <?php if ($lang_number == 1) {echo '<a class="faq btn" href="#faq"><i class="bi bi-question-circle-fill"></i> Gyakran ismételt kérdések</a>';} ?>
</div>

<div class="food">
  <h2 class="title"><?= $lang_data[$lang_number]["home"]["food"]; ?></h2>
  <div class="f0">
    <img src="<?= $local ?>img/food/01.webp" loading="lazy" alt="<?= $lang_data[$lang_number]["alt"]["food_1"]; ?>">
    <img src="<?= $local ?>img/food/02.webp" loading="lazy" alt="<?= $lang_data[$lang_number]["alt"]["food_2"]; ?>">
    <img src="<?= $local ?>img/food/03.webp" loading="lazy" alt="<?= $lang_data[$lang_number]["alt"]["food_3"]; ?>">
    <img src="<?= $local ?>img/food/04.webp" loading="lazy" alt="<?= $lang_data[$lang_number]["alt"]["food_4"]; ?>">
  </div>
  <a href="menu" class="btn"><i class="bi bi-book-half"></i> <?= $lang_data[$lang_number]["home"]["menu"]; ?></a>
</div>

<div class="table bg1">
  <div class="bg_blur"></div>
  <div class="inner_box">
    <h2 class="title"><?= $lang_data[$lang_number]["home"]["table"]; ?></h2>
    <p><?= $lang_data[$lang_number]["home"]["table2"]; ?></p>
    <p><?= $lang_data[$lang_number]["home"]["table3"]; ?></p>
    <?php PrintSocial(); ?>
  </div>
</div>

<div class="about_home bg1">
  <div class="inner_box">
    <h2 class="title"><?= $lang_data[$lang_number]["about"]["title"]; ?></h2>
    <p><?= $lang_data[$lang_number]["about"]["desc"]; ?></p>
  </div>
</div>

<?php require_once "php/modules/guest.php"; ?>

<?php if ($lang_number == 1) {require_once "php/modules/faq.php";} ?>

<div class="eu">
  <div class="image"><a target="_blank" href="<?= $local ?>img/hitel.jpg"><img src="<?= $local ?>img/hitel_mini.webp" loading="lazy" alt="<?= $lang_data[$lang_number]["alt"]["loan"]; ?>"></a></div>
</div>

<script>
  var home = true;
</script>