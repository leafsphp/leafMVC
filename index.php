<?php
require_once __DIR__ . '/vendor/autoload.php';

require __DIR__. "/config/bootstrap.php";

$leaf = new Leaf\Core\Leaf;
new \Config\Debug;

require __DIR__. "/config/routes.php";