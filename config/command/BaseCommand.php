<?php 
    namespace Config\Command;

    use Illuminate\Support\Str;

    class BaseCommand
    {
        public static function dir_and_file($input): Array
        {
            $controllerPath = dirname(__DIR__). '/controllers/';

            $path_to_controller = strtolower($input->getArgument("controller")).'Controller.php';
            $path_info = pathinfo($path_to_controller);
    
            $dirname = $path_info["dirname"] == "." ? $controllerPath : $controllerPath . $path_info["dirname"];
            $filename = Str::studly($path_info['filename']) . '.php';
    
            return [$dirname, $filename];
        }
    }
    