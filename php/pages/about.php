<div class="about bg1">
<div class="bg_main"></div>
  <div class="bg_blur"></div>
  <div class="inner_box">
    <h1 class="title"><?= $lang_data[$lang_number]["about"]["title"]; ?></h1>
    <p><?= $lang_data[$lang_number]["about"]["desc"]; ?></p>
  </div>
</div>

<div class="vip">
  <div class="bg_blur"></div>

  <div class="left">
    <img src="<?= $local ?>img/vip.jpg" loading="lazy" alt="">
  </div>
  
  <div class="right">
    <p><?= $lang_data[$lang_number]["about"]["vip"]; ?></p>
  </div>

</div>

<?php if ($lang_number === 1) {require_once "php/modules/faq.php";} ?>

<?php require_once "php/modules/guest.php"; ?>