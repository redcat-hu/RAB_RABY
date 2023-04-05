<div class="home bg1">
  <div class="bg_main"></div>
  <div id="media"></div>

  <?php
    if ($language[0] == "hu") { echo '
      <div class="news">
        <h2><i class="bi bi-patch-exclamation"></i> Húsvét hétfőn is nyitva vagyunk</h2>
      </div>
      ';}
  ?>
  <div class="bottom">
    <div class="warnings">
      <div><i class="bi bi-flower1"></i> <?= $lang_data[$language[0]]["home"]["garden"]; ?></div>
      <div><i class="bi bi-patch-check-fill"></i> <?= $lang_data[$language[0]]["home"]["dog"]; ?></div>
      <div><i class="bi bi-credit-card-2-back-fill"></i> <?= $lang_data[$language[0]]["home"]["ccard"]; ?></div>
    </div>
  </div>
</div>

<div class="welcome g0">
  <h1 class="title">Rab Ráby <?= $lang_data[$language[0]]["restaurant"]; ?>, Szentendre (<?= $lang_data[$language[0]]["since"]; ?>)</h1>

  <div class="open_hours only_pc f0">
    <?php PrintOpen($api, $lang_data, $language); ?>
  </div>

  <div class="hello f0">
    <div class="only_pc"><i class="bi bi-cup-hot-fill"></i></div>
    <p><?= $lang_data[$language[0]]["home"]["welcome"]; ?></p>
  </div>

  <div class="other f0">
    <?php if ($language[0] == 1) {echo '<a class="faq btn" href="#faq"><i class="bi bi-question-circle-fill"></i> Gyakran ismételt kérdések</a>';} ?>
    <a class="btn faq" href="parking"><i class="bi bi-p-circle-fill"></i> <?= $lang_data[$language[0]]["home"]["parking"]; ?></a>
  </div>
</div>

<div class="food">
  <h2 class="title"><?= $lang_data[$language[0]]["home"]["food"]; ?></h2>
  <div class="f0">
    <img src="<?= $local[2] ?>img/food/01.webp" loading="lazy" alt="<?= $lang_data[$language[0]]["alt"]["food_1"]; ?>">
    <img src="<?= $local[2] ?>img/food/02.webp" loading="lazy" alt="<?= $lang_data[$language[0]]["alt"]["food_2"]; ?>">
    <img src="<?= $local[2] ?>img/food/03.webp" loading="lazy" alt="<?= $lang_data[$language[0]]["alt"]["food_3"]; ?>">
    <img src="<?= $local[2] ?>img/food/04.webp" loading="lazy" alt="<?= $lang_data[$language[0]]["alt"]["food_4"]; ?>">
  </div>
  <a href="menu" class="btn"><i class="bi bi-book-half"></i> <?= $lang_data[$language[0]]["home"]["menu"]; ?></a>
</div>

<div class="table bg1">
  <div class="bg_blur"></div>
  <div class="inner_box">
    <h2 class="title"><?= $lang_data[$language[0]]["home"]["table"]; ?></h2>
    <p><?= $lang_data[$language[0]]["home"]["table2"]; ?></p>
    <p><?= $lang_data[$language[0]]["home"]["table3"]; ?></p>
    <?php PrintSocial(); ?>
  </div>
</div>

<div class="about_home bg1">
  <div class="inner_box">
    <h2 class="title"><?= $lang_data[$language[0]]["about"]["title"]; ?></h2>
    <p><?= $lang_data[$language[0]]["about"]["desc"]; ?></p>
  </div>
</div>

<?php 
require_once "php/modules/guest.php"; 
require_once "php/modules/faq.php";
?>

<div class="eu">
  <div class="image"><a target="_blank" href="<?= $local[2] ?>img/hitel.jpg"><img src="<?= $local[2] ?>img/hitel_mini.webp" loading="lazy" alt="<?= $lang_data[$language[0]]["alt"]["loan"]; ?>"></a></div>
</div>

<script>
  var home = true;
</script>