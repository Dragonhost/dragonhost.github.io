
<?php

$link = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
$parts = explode("/",$link);
$path = end($parts);

?>