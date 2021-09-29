<?php
include 'core/autoload.php';
$elemet = new ElementLoader();
$elemet->loadElement();
$route = new Route();
$route->submit();
$route->checkRoute();
?>
