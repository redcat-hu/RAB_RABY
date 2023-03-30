<?php 
require_once "php/functions.php";
require_once "php/modules/cookie.php";
require_once "php/back.php";

// BASE
require_once "php/parts/begin.php";

if(isset($page))
{
    $file = "php/pages/". $page .".php";
}

if(is_file($file))
{
    require_once $file;
}
else
{
    require_once "php/pages/404.php";
}

require_once "php/parts/end.php";
?>