</main>

<footer>
  <div class="social f0">
    <div><?= $lang_data[$lang_number]["footer"]["kozossegi"]; ?></div>
    <?php PrintSocial(); ?>
  </div>

<div class="base g0">
  <div>
    <?php PrintLogo($lang_data, $lang_number); ?>
    <p><?= $lang_data[$lang_number]["since"]; ?></p>
  </div>

  <div class="open_hours f0">
    <?php PrintOpen($api, $lang_data, $lang_number); ?>
  </div>

  <div></div>

  <div>
    <div class="ftitle"><?= $lang_data[$lang_number]["footer"]["contact"]; ?></div>
    <p><a href="<?= $lang_data[0]["info"]["gpage"]; ?>"><i class="bi bi-geo-alt-fill"></i> 2000 Szentendre, Kucsera Ferenc u. 1/A</a></p>
    <p><a href="tel:<?= $lang_data[0]["info"]["phone"]; ?>"><i class="bi bi-telephone-fill"></i> +36-26-310-819</a></p>
    <p><a href="mailto:<?= $lang_data[0]["info"]["mail"]; ?>"><i class="bi bi-envelope-fill"></i> info@rabraby.hu</a></p>
  </div>
</div>


<div class="bottom">
  <div class="inner f0">
    <div class="info">
      <ul class="f0">
        <li><?php PrintFlag(); ?></li>
        <?php PrintMenu2($lang_number, $lang_data, $page); ?>
      </ul>
    </div>
    <div class="creator">
      <a href="https://red-cat.hu"><div>site by </div><img src="https://id.red-cat.hu/img/redcat_logo.webp" loading="lazy" alt="<?= $lang_data[$lang_number]["alt"]["redcat"]; ?>"></a>
    </div>
  </div>
</div>
</footer>


<?php require_once "php/modules/mobile.php"; ?>
<div id="cookie"></div>

<script> local = "<?= $local ?>"; </script>
<script src="<?= $redcat_local ?>js/cookie.js?v=<?= time() ?>"></script>
<script src="<?= $local ?>js/main.js?v=<?= time() ?>"></script>
</body>
</html>