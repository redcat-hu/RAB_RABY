<!doctype html>
<html lang="<?= $lang_data[$language[0]]["iso"]; ?>">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="<?= $lang_data[$language[0]]["meta_desc"]; ?>">
    
    <title><?= $lang_data[$language[0]]["title"].' - '.$page_title; ?></title>

    <meta property="og:title" content="<?= $lang_data[$language[0]]["title"]; ?>" />
    <meta property="og:description" content="" />
    <meta property="og:url" content="https://rabraby.hu/<?= $language[2].$page; ?>" />
    <meta property="og:type" content="website" />
    <meta property="og:image" content="" />

    <meta name="google-site-verification" content="0whkGTv_HMGrl7OIzwdiRY0IUc_0xuZKDGf0cgPywLw" />
    <link rel="alternate" hreflang="hu" href="https://rabraby.hu/<?= $page; ?>" />
    <link rel="alternate" hreflang="en" href="https://rabraby.hu/en/<?= $page; ?>"/>
    <link rel="alternate" hreflang="x-default" href="https://rabraby.hu/en/<?= $page; ?>" />


    <link rel="apple-touch-icon" sizes="180x180" href="<?= $local[2]; ?>img/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="<?= $local[2]; ?>img/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="<?= $local[2]; ?>img/favicon/favicon-16x16.png">

    <link rel="stylesheet" href="<?= $local[1] ?>css/cookie.css?v=<?= time() ?>">
    <link rel="stylesheet" href="<?= $local[0] ?>css/style.css?v=<?= time() ?>">
    <?php if ($lang_data[$language[0]]["iso"]=="hu") {echo '<style>.restaurant {letter-spacing: 5px;}</style>';} ?>
    <script>
      var home = ""
    </script>
    <?php
      if ($cookie_2["tracking"] and !$local[3]) {
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
  <?php
  if ($cookie_2["tracking"] and !$local[3]) {
  echo
  '<!-- Google Tag Manager (noscript) -->
  <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-KB2GVSJ"
  height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
  <!-- End Google Tag Manager (noscript) -->';} ?>
<header>
  <div class="topbar">
      <div class="inner">
        <div><a href="<?= $lang_data["info"]["gpage"]; ?>"><i class="bi bi-geo-alt-fill"></i> <?= $lang_data[$language[0]]["contact"]["addr"]; ?></a></div>
        <div><a href="tel:<?= $lang_data["info"]["phone"]; ?>"><i class="bi bi-telephone-fill"></i> +36 26 310 819</a></div>
      </div>
  </div>

  <nav>
    <div class="inner">

      <div class="left">
        <?php PrintLogo($lang_data, $language); ?>
      </div>

      <div class="right">
        <ul class="pc">
          <?php PrintMenu($local, $language, $lang_data, $page); ?>
        </ul>
      </div>

      <div class="center">
        <?php PrintFlag($local, $page, $language); ?>
        <div id="darkMode" class="btn_js">
          <i class="bi bi-moon-fill"></i>
        </div>
      </div>

    </div>
  </nav>
</header>

<div id="pre_loader">
  <div class="logo"><span class="rr">Rab Ráby</span><br>Restaurant</div>
  <p><?= $lang_data[$language[0]]["preload"]["load"]; ?></p>
</div>
<main>