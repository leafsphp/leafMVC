<?php

namespace Config\Command;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Process\Process;
use Symfony\Component\Process\Exception\ProcessFailedException;
use Illuminate\Support\Str;
use Config\Command\BaseCommand;

class GenerateControllerCommand extends Command
{
    protected static $defaultName = 'g:controller';

    public function __construct(){
        $this->controllerPath = dirname(dirname(__DIR__)) . '/app/controllers/';
        parent::__construct();
    }

    protected function configure()
    {
        $this 
            ->setDescription("command to generate controller file")
            ->setHelp("Used to generate controller file")
            ->addArgument("controller", InputArgument::REQUIRED, 'controller name');
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $output->writeln($this->_generateController($input));
    }

    public function _generateController($input)
    {
        list($dirname, $filename) = BaseCommand::dir_and_file($input);

        // if(!file_exists($dirname)):
        //     // check directory if not exists
        //     mkdir($dirname, 0755, true);

        //     $paths = explode('/', $dirname);
        //     $this->baseController = Str::studly((strtolower(end($paths))));
        //     $child_path = end($paths);

        //     $base_path = str_replace($child_path, "", $dirname);

        //     if(!file_exists($base_path . $this->baseController)):
        //         $file = $base_path . $this->baseController;
        //         // create base controller
        //         touch($file);

        //         $fileContent = file_get_contents(__DIR__ . '/stubs/controller.stub');
        //         $fileContent = str_replace("ClassName", $this->baseController, $fileContent);
        //         file_put_contents($file, $fileContent);
        //     endif;
        // endif;

        if (!file_exists($dirname . '/' . $filename)):
            $file = $dirname . '/' . $filename;
            $controller = str_replace(".php", "", $filename);
            // create the main controller file
            touch($file);  

            $fileContent = file_get_contents(__DIR__ . '/stubs/subController.stub');
            
            $fileContent = str_replace(["ClassName"], [$controller], $fileContent);
            file_put_contents($file, $fileContent);

            return "$controller created successfully";
        else:
            return "Controller already exists";
        endif;
    }
}