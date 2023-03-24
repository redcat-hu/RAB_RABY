<?php
$json = file_get_contents('json/lang.json');
$lang_data = json_decode($json, JSON_OBJECT_AS_ARRAY);

if ( !empty($_GET['lang']) ) {
    $_COOKIE['lang'] = $_GET['lang'] === 'en' ? 'en' : 'hu';
} else {
    $_COOKIE['lang'] = 'hu';
}
setcookie('lang', $_COOKIE['lang']);

if ( $_COOKIE['lang'] == "en") {
    $language = "en";
    $lang_number = 2;
} else {
    $language = "hu";
    $lang_number = 1;
}
 

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
    $page = $url[2] ? $url[2] : "home";
}
else                            // Public
{
    $test = false;
    $local = "/";
    $page = $url[1] ? $url[1] : "home";
}
?>