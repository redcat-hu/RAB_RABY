<div class="bg1 other_page sitemap">
<div class="bg_main"></div>
    <div class="inner_window f0">
        <?php 
            if ($page_title != "404") {
                echo '<h1 class="title">'.$lang_data[$language[0]]["nav"]["sitemap"].'</h1>';
            } else {
                echo '<h1 class="title">'. $lang_data[$language[0]]["404"]["title"].'</h1>
                    <h2>'. $lang_data[$language[0]]["404"]["desc"].'</h2>
                    <p>'. $lang_data[$language[0]]["404"]["desc_2"].'</p>';
            }
        ?>
        <ul class="btn5 f0">
            <?php PrintMenu($local, $language, $lang_data, $page); ?>
            <?php PrintMenu2($local, $language, $lang_data, $page); ?>
        </ul>
        <?php PrintSocial(); ?>
    </div>
</div>