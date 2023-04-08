<?php
set_include_path( $_SERVER['DOCUMENT_ROOT'] . DIRECTORY_SEPARATOR );
$user_lang = substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2); // felhasználó nyelve

// lang json
$json = file_get_contents('json/lang.json');
$lang_data = json_decode($json, JSON_OBJECT_AS_ARRAY);

// ? jelek kiiktatása + paraméterek kiírása
$url = strpos($_SERVER['REQUEST_URI'], "?");
if ($url != false) {
    $url = explode("?", $_SERVER['REQUEST_URI']);
    parse_str($url[1], $param);

} else {
    $url[0] = $_SERVER['REQUEST_URI'];
}

// URL szétbontása
$url = explode("/", $url[0]);

// local / redcat local / media / test
if ($url[1] === "rabraby") {    // Local
    $local = ["/rabraby/", "/rabraby_media/", "/redcat/data/", true];
    $i = 2;
} else {                        // Éles
    $local = ["/", "/", "https://red-cat.hu/data/", false];
    $i = 1;
}

$page = $url[$i] ? $url[$i] : "home";
if ($page === "en") {
    $lang = $page;
    $page = $page = $url[$i+1] ? $url[$i+1] : "home";
}

// LANGUAGE
if (isset($param["lang"])) {
    $language[0] = $param["lang"];
} elseif (isset($_COOKIE["lang"])) {
    $language[0] = $_COOKIE["lang"];
} else {
    $language[0] = $user_lang;
}

if ($language[0] === "hu") {
    $language = ["hu", "en", ""];
} else {
    $language = ["en", "hu", "en/"];
}
if (!empty($cookie_2["functionality"]) and isset($param["lang"])) {
    setcookie("lang", $language[0], time() + (86400 * 1), "/");
}

if (isset($lang_data[$language[0]]["nav"][$page])) {
    $page_title = $lang_data[$language[0]]["nav"][$page];
} else {
    $page_title = "404";
}

$json = file_get_contents('https://maps.googleapis.com/maps/api/place/details/json?fields=name%2Crating%2Cuser_ratings_total%2Copening_hours&place_id=ChIJQfqHyhHWQUcRJrZrVZ_rnSQ&language='. $language[0] .'&key=AIzaSyCr4zLxQbk1by74NI_x9IGZiC2kXkTxc7o');
$api = json_decode($json, JSON_OBJECT_AS_ARRAY); // gmaps api json
?>