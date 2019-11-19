<?php

namespace Config\Command;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Input\InputArgument;
use Illuminate\Support\Str;

class DeleteModelCommand extends Command {

    protected static $defaultName = "d:model";

    public function __construct() {
        $this->modelPath = dirname(dirname(__DIR__)).\models_path();
        parent::__construct();
    }

    protected function configure() {
        $this
            ->setDescription("Delete a model")
            ->setHelp("Delete a model")
            ->addArgument("model", InputArgument::REQUIRED, "model name");
    }


    protected function execute(InputInterface $input, OutputInterface $output) {
        $output->writeln($this->_deleteModel($input));
    }

    public function _deleteModel($input) {
        list($dirname, $filename) = $this->dir_and_file($input);

        if(file_exists($dirname . '/' . $filename)):
            unlink($dirname . '/' . $filename);

            $is_empty = !(new \FilesystemIterator($dirname))->valid();

            if ($is_empty === true):
                $path = explode('/', $dirname);
                $base_model = Str::studly(strtolower(end($path))) . ".php";
                $base_path = str_replace(end($path), "", $dirname);

                unlink($base_path . $base_model);
                rmdir($dirname);
            endif;
        else:
            return "Model does not exists";
        endif;

        return "{$filename} deleted successfully";
    }

    public function dir_and_file($input): Array {
        $modelPath = dirname(dirname(__DIR__)).\models_path();

        $path_to_model = ($input->getArgument("model"));
        $path_info = pathinfo($path_to_model);

        $dirname = $path_info["dirname"] == "." ? $modelPath : $modelPath . $path_info["dirname"];
        $filename = Str::studly($path_info['filename']) . '.php';

        return [$dirname, $filename];
    }
}