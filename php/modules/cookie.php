<?php
if (isset($_COOKIE["cookie_consent_level"]) and isset($_COOKIE["cookie_consent_user_accepted"])) {
        $cookie_1 = $_COOKIE["cookie_consent_user_accepted"];
        $cookie_2 = $_COOKIE["cookie_consent_level"];
} else {
        $cookie_1 = false;
        $cookie_2 = '{"necessary":false, "functionality": false, "tracking": false, "targeting": false}';
}
$cookie_2 = json_decode($cookie_2, JSON_OBJECT_AS_ARRAY);
?>