<?php

namespace Config\Command;

use Illuminate\Support\Str;

class BaseCommand
{
    public static function dir_and_file($input): array
    {
        $controllerPath = dirname(dirname(__DIR__)) . controllers_path();
        $path_info = pathinfo($input->getArgument("controller"));

        $dirname = $path_info["dirname"] == "." ? $controllerPath : $controllerPath . $path_info["dirname"];
        $truename = $path_info['filename'];

        if (strpos(Str::plural($truename) . '.php', "Controller")) {
            $filename = Str::studly($truename) . '.php';
        } else {
            $filename = Str::plural($truename) . 'Controller.php';
        }

        return [$dirname, $filename];
    }
}
