<?php 
    namespace Config\Command;

    use Illuminate\Support\Str;

    class BaseCommand {
        public static function dir_and_file($input): Array {
            $controllerPath = dirname(dirname(__DIR__)). '/app/controllers/';

            $path_to_controller = ($input->getArgument("controller"));
            $path_info = pathinfo($path_to_controller);
    
            $dirname = $path_info["dirname"] == "." ? $controllerPath : $controllerPath . $path_info["dirname"];
            $filename = Str::studly($path_info['filename']) . '.php';
    
            return [$dirname, $filename];
        }
    }
    