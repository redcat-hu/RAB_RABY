<?php
    function PrintSocial()
    {
        echo '
        <ul class="f0 social">
            <li><a href="mailto:info@rabraby.hu"><i class="bi bi-envelope-fill"></i></a></li>
            <li><a href="https://www.facebook.com/rabraby.hu" target="_blank"><i class="bi bi-facebook"></i></a></li>
            <li><a href="https://www.instagram.com/rabraby.hu" target="_blank"><i class="bi bi-instagram"></i></a></li>
            <li><a href="https://g.page/rabraby?gm" target="_blank"><i class="bi bi-google"></i></a></li>
        </ul>';
    }
    function PrintMenu($lang_number, $lang_data, $page)
    {
        $menu = ["home","menu", "groups", "about", "contact"];
        for ($i=0; $i < count($menu); $i++) { 
            echo '<li class="';
            if (strtolower($page) == $menu[$i]) {echo ' active';}
            echo '"><a href="';
            echo $menu[$i];
            echo '">';
            echo $lang_data[$lang_number]["nav"][$menu[$i]];
            echo '</a></li>';
        }
    }
    function PrintMenu2($lang_number, $lang_data, $page)
    {
        $menu2 = ["sitemap", "imprint", "parking"];
        for ($i=0; $i < count($menu2); $i++) { 
            echo '<li><a href="';
            echo $menu2[$i];
            echo '">';
            echo $lang_data[$lang_number]["nav"][$menu2[$i]];
            echo '</a></li>';
        }
    }
    function PrintLogo($lang_data, $lang_number)
    {
        echo '<div class="logo"><div class="rr">Rab Ráby</div>
        <div class="restaurant">';
        echo $lang_data[$lang_number]["restaurant"];
        echo '</div></div>';
    }
    function PrintFlag()
    {
        echo '<div class="lang">
            <a href="#"><img src="https://red-cat.hu/data/flag/en.svg" alt="Language Switcher, Flag"></a>
            </div>';
    }
    function PrintOpen($api, $lang_data, $lang_number)
    {
        if ($api["status"] === "OK") {
            $g_json = true;
        
            echo '<ul><li>';
            if ($api["result"]["opening_hours"]["open_now"]) {
                echo $lang_data[$lang_number]["open"][1];
            } else {
                echo $lang_data[$lang_number]["open"][0];
            }
            echo '</li></ul>';
        
            var_dump($api["result"]["opening_hours"]["open_now"]);
        }
    }


    
?>


