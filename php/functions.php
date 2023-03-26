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
        $mano = false;

        if ($api["status"] === "OK") {
            echo '<div class="online">🟢online</div>';

            // Open/Closed
            echo '<div class="now"><b>';
            if ($api["result"]["opening_hours"]["open_now"]) {
                echo $lang_data[$lang_number]["open"]["status"][1]; } 
                else 
                {echo $lang_data[$lang_number]["open"]["status"][0];
            }
            echo '</b><div class="moment">('. $lang_data[$lang_number]["open"]["title"][1] .')</div>';
            echo '</div>';

            // Title: Opening hours
            echo '<div><b>'. $lang_data[$lang_number]["open"]["title"][0].':</b></div>';

            // Days
            echo '<ul>';
            for ($i=0; $i < count($api["result"]["opening_hours"]["weekday_text"]); $i++) { 
                if (str_contains($api["result"]["opening_hours"]["weekday_text"][$i], $lang_data[$lang_number]["open"]["status"][0])) {
                    echo '<li class="closed';
                    if ($i == date("N")-1) {echo ' active';};
                    echo '">';
                } else {
                    echo '<li class="';
                    if ($i == date("N")-1) {echo ' active';};
                    echo '">';
                }
                echo $api["result"]["opening_hours"]["weekday_text"][$i];
                echo '</li>';
            }
            echo '</ul>';
            
        } else {
            echo '<div class="offline">🔴offline</div>';
        }
        echo '<a href="parking"><div class="now"><i class="bi bi-p-circle-fill"></i> '. $lang_data[$lang_number]["home"]["parking2"] .'</div></a>';
    } 
?>