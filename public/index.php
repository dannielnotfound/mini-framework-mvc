<?php
require_once "../vendor/autoload.php";

$route = new \App\Routes;
print_r($route->getUrl());
echo "<hr>";
echo "<pre>";
print_r($route->getRoutes());
echo "</pre>";
echo "<hr>";
echo "<h1> Olá mundo, olá Backend! </>";

?>