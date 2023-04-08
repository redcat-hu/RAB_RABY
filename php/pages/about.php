<div class="about bg1">
<div class="bg_main"></div>
  <div class="bg_blur"></div>
  <div class="inner_box">
    <h1 class="title"><?= $lang_data[$language[0]]["about"]["title"]; ?></h1>
    <p><?= $lang_data[$language[0]]["about"]["desc"]; ?></p>
  </div>
</div>

<div class="vip">

  <div class="left">
    <img src="<?= $local[1] ?>img/vip.jpg" loading="lazy" alt="">
  </div>
  
  <div class="right">
    <p><?= $lang_data[$language[0]]["about"]["vip"]; ?></p>
  </div>

</div>

<?php if ($language[0] === "hu") {require_once "php/modules/faq.php";} ?>

<?php require_once "php/modules/guest.php"; ?>