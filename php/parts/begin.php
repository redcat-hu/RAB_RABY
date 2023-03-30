<!doctype html>
<html lang="<?= $lang_data[$lang_number]["iso"]; ?>">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="<?= $lang_data[$lang_number]["meta_desc"]; ?>">
    
    <title><?= $lang_data[$lang_number]["title"].' - '.$lang_data[$lang_number]["nav"][$page]; ?></title>

    <meta property="og:title" content="Rab Ráby Restaurant" />
    <meta property="og:description" content="" />
    <meta property="og:url" content="<?= 'https://rabraby.hu/' ?>" />
    <meta property="og:type" content="website" />
    <meta property="og:image" content="" />

    <link rel="apple-touch-icon" sizes="180x180" href="<?= $media; ?>img/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="<?= $media; ?>img/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="<?= $media; ?>img/favicon/favicon-16x16.png">

    <link rel="stylesheet" href="<?= $redcat_local ?>css/cookie.css?v=<?= time() ?>">
    <link rel="stylesheet" href="<?= $local ?>css/style.css?v=<?= time() ?>">
    <?php if ($lang_data[$lang_number]["iso"]=="hu") {echo '<style>.restaurant {letter-spacing: 5px;}</style>';} ?>
    <script>
      var home = ""
    </script>
    <?php if ($cookie_2["tracking"] and !$test) {
      echo
      "<!-- Google Tag Manager -->
      <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
      new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
      j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
      'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
      })(window,document,'script','dataLayer','GTM-KB2GVSJ');</script>
      <!-- End Google Tag Manager -->";
    } ?>
</head>
<body>
<?php if ($cookie_2["tracking"] and !$test) {
      echo
      '<!-- Google Tag Manager (noscript) -->
      <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-KB2GVSJ"
      height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
      <!-- End Google Tag Manager (noscript) -->';
    } ?>
<header>
  <div class="topbar">
      <div class="inner">
        <div><a href="#"><i class="bi bi-geo-alt-fill"></i> <?= $lang_data[$lang_number]["contact"]["addr"]; ?></a></div>
        <div><a href="tel:+3626310819"><i class="bi bi-telephone-fill"></i> +36 26 310 819</a></div>
      </div>
  </div>

  <nav>
    <div class="inner">

      <div class="left">
        <?php PrintLogo($lang_data, $lang_number); ?>
      </div>

      <div class="right">
        <ul class="pc">
          <?php PrintMenu($lang_number, $lang_data, $page); ?>
        </ul>
      </div>

      <div class="center">
        <?php PrintFlag(); ?>
        <div id="darkMode" class="btn_js">
          <i class="bi bi-moon-fill"></i>
        </div>
      </div>



    </div>
  </nav>
</header>

<div id="pre_loader">
  <div class="logo"><span class="rr">Rab Ráby</span><br>Restaurant</div>
  <p><?= $lang_data[$lang_number]["preload"]["load"]; ?></p>
</div>
<main>