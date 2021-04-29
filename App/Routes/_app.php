<?php
/**@var Leaf\App $app */

$app->get("/", function () {
    echo view("index");
});
