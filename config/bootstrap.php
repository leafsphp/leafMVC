<?php
include __DIR__."/paths.php";

spl_autoload_register(function ($class) {
	$file = str_replace('\\', '/', $class);

	if (!file_exists($file.".php")) {
		return;
	} else {
		require "$file.php";
	}
});