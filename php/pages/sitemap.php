<div class="bg1 other_page sitemap">
<div class="bg_main"></div>
    <div class="inner_window f0">
        <h1 class="title"><?= $lang_data[$lang_number]["nav"]["sitemap"]; ?></h1>
        <ul class="btn5 f0">
            <?php PrintMenu($lang_number, $lang_data, $page); ?>
            <?php PrintMenu2($lang_number, $lang_data, $page); ?>
        </ul>
        <?php PrintSocial(); ?>
    </div>
</div>