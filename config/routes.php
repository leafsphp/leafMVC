<?php
if (prefix($_SERVER["REQUEST_URI"], "api")) {
	require dirname(__DIR__)."/app/routes/api.php";
} else {
	require dirname(__DIR__)."/app/routes/web.php";
}

function prefix($uri, $prefix) {
	$uri = rtrim($prefix, '/').'/'.ltrim($uri, '/');
	$uri = trim($uri, '/');
	return $uri;
}