</main>

<footer>
  <div class="social f0">
    <div><?= $lang_data[$language[0]]["footer"]["kozossegi"]; ?></div>
    <?php PrintSocial(); ?>
  </div>

<div class="base g0">
  <div>
    <?php PrintLogo($lang_data, $language); ?>
    <p><?= $lang_data[$language[0]]["since"]; ?></p>
  </div>

  <div class="open_hours f0">
    <?php PrintOpen($api, $lang_data, $language); ?>
  </div>

  <div></div>

  <div>
    <div class="ftitle"><?= $lang_data[$language[0]]["footer"]["contact"]; ?></div>
    <p><a href="<?= $lang_data["info"]["gpage"]; ?>"><i class="bi bi-geo-alt-fill"></i> 2000 Szentendre, Kucsera Ferenc u. 1/A</a></p>
    <p><a href="tel:<?= $lang_data["info"]["phone"]; ?>"><i class="bi bi-telephone-fill"></i> +36-26-310-819</a></p>
    <p><a href="mailto:<?= $lang_data["info"]["mail"]; ?>"><i class="bi bi-envelope-fill"></i> info@rabraby.hu</a></p>
  </div>
</div>


<div class="bottom">
  <div class="inner f0">
    <div class="info">
      <ul class="f0">
        <li></li>
        <?php PrintMenu2($local, $language, $lang_data, $page); ?>
      </ul>
    </div>
    <div class="creator">
      <a target="_blank" href="https://red-cat.hu"><div>site by </div><img src="https://id.red-cat.hu/img/redcat_logo.webp" loading="lazy" alt="<?= $lang_data[$language[0]]["alt"]["redcat"]; ?>"></a>
    </div>
  </div>
</div>
</footer>


<?php require_once "php/modules/mobile.php"; ?>
<div id="cookie"></div>

<script>
  var language = "<?= $language[0] ?>";
  var php = ["<?= $local[0] ?>", "<?= $local[1] ?>", "<?= $local[2] ?>", <?= $local[3] ?>, "<?= $page ?>"];
</script>
<script src="<?= $local[2] ?>js/cookie.js?v=<?= time() ?>"></script>
<script src="<?= $local[0] ?>js/main.js?v=<?= time() ?>"></script>
</body>
</html>