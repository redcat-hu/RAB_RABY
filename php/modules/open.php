<?php
$json = file_get_contents('https://maps.googleapis.com/maps/api/place/details/json?fields=name%2Crating%2Copening_hours&place_id=ChIJQfqHyhHWQUcRJrZrVZ_rnSQ&key=AIzaSyCr4zLxQbk1by74NI_x9IGZiC2kXkTxc7o');
$api = json_decode($json, JSON_OBJECT_AS_ARRAY);
?>