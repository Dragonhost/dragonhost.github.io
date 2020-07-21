<?php

    $url = (isset($_SERVER['HTTPS']) ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
    $parse_url = explode("/",$url);
    $page = explode(".",end($parse_url));
    $current_page = $page[0];

?>