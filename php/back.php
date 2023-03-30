<?php
set_include_path( $_SERVER['DOCUMENT_ROOT'] . DIRECTORY_SEPARATOR );
$browser_lang = substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2); // the language of browser (en)

$user_lang = substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2);    // Pl. HU
$json = file_get_contents('json/lang.json');
$lang_data = json_decode($json, JSON_OBJECT_AS_ARRAY);

// LANGUAGE
/*
if ( !empty($_GET['lang']) ) {
    $_COOKIE['lang'] = $_GET['lang'] === 'en' ? 'en' : 'hu';
} else {
    $_COOKIE['lang'] = 'hu';
}
setcookie('lang', $_COOKIE['lang']);
*/
//$user_lang = "en";
if ($user_lang == "hu") {
    $language = "hu";
    $lang_number = 1;
} else {
    $language = "en";
    $lang_number = 2;
}
 
// GOOGLE PLACES API
$json = file_get_contents('https://maps.googleapis.com/maps/api/place/details/json?fields=name%2Crating%2Cuser_ratings_total%2Copening_hours&place_id=ChIJQfqHyhHWQUcRJrZrVZ_rnSQ&language='. $language .'&key=AIzaSyCr4zLxQbk1by74NI_x9IGZiC2kXkTxc7o');
$api = json_decode($json, JSON_OBJECT_AS_ARRAY);

// ? jelek kiiktatása + paraméterek kiírása
$url = strpos($_SERVER['REQUEST_URI'], "?");
if ($url != false) {
    $url = explode("?", $_SERVER['REQUEST_URI']);
    $param = true;
} else {
    $url[0] = $_SERVER['REQUEST_URI'];
    $param = false;
}

// URL szétbontása
$url = explode("/", $url[0]);

if ($url[1] === "rabraby") {    // Local
    $test = true;
    $local = "/rabraby/";
    $redcat_local = "/redcat/data/";
    $media = "/rabraby_media/";
    $page = $url[2] ? $url[2] : "home";
}
else                            // Public
{
    $test = false;
    $local = "/";
    $redcat_local = "https://red-cat.hu/data/";
    $media = "/";
    $page = $url[1] ? $url[1] : "home";
}
?>