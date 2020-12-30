<?php
spl_autoload_register(function ($class) {
    $file = str_replace('\\', '/', $class);

    if (!file_exists("$file.php")) return;

    require "$file.php";
});
