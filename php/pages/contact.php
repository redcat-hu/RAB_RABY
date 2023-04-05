<div class="contact bg1">
<div class="bg_main"></div>
  <div class="bg_blur"></div>
  <div class="inner_box">
    <h1 class="title"><?= $lang_data[$language[0]]["contact"]["title"]; ?></h1>
    <div>
      <p><a href="#"><i class="bi bi-geo-alt-fill"></i> <?= $lang_data[$language[0]]["contact"]["addr"]; ?></a></p>
      <p><a href="#"><i class="bi bi-telephone-fill"></i> +36 26 310 819</a></p>
      <p><a href="#"><i class="bi bi-envelope-fill"></i> info@rabraby.hu</a></p>
      <p><a target="_blank" href="https://id.red-cat.hu/rr"><i class="bi bi-person-vcard-fill"></i> <?= $lang_data[$language[0]]["contact"]["card"]; ?></a></p>

    </div>
    <div class="social">
      <?php PrintSocial(); ?>
    </div>
  </div>
</div>

<div class="contact_info">
  <h2><i class="bi bi-info-circle"></i> <?= $lang_data[$language[0]]["contact"]["cinfo"]; ?></h2>
  <div>
    <p><b><?= $lang_data[$language[0]]["contact"]["vat"]; ?>:</b> 12134469-2-13</p>
    <p><b><?= $lang_data[$language[0]]["contact"]["vreg"]; ?>:</b> 13-09-072 136</p>
    <p><b>K&H Bank</b> 10403112-50526587-67851007</p>
  </div>
</div>