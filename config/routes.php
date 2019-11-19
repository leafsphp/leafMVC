<?php
$isAPIroute = strpos($leaf->getCurrentUri(), "api/");

if ($isAPIroute == true || $leaf->getCurrentUri() == "/api") {
	require dirname(__DIR__).routes_path("api.php");
} else {
	require dirname(__DIR__).routes_path("web.php");
}