<?php
$isAPIroute = strpos($leaf->getCurrentUri(), "api/");

echo $leaf->getCurrentUri();

if ($isAPIroute == true || $leaf->getCurrentUri() == "/api") {
	require dirname(__DIR__)."/app/routes/api.php";
} else {
	require dirname(__DIR__)."/app/routes/web.php";
}