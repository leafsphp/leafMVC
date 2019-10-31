<?php

spl_autoload_register(function ($class) {
	$file = str_replace('\\', '/', $class);
	require "$file.php";
});
	// require __DIR__. "/controllers/IndexController.php";
	