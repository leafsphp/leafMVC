<?php

namespace Config\Command;

use InvalidArgumentException;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputOption;
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
            ->setDescription("Create a new controller class")
            ->setHelp("Create a new controller class")
            ->addArgument("controller", InputArgument::REQUIRED, 'controller name')
            ->addOption("resource", null, InputOption::VALUE_NONE, 'Create a resource controller')
            ->addOption("api", null, InputOption::VALUE_NONE, 'Create an API controller');
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        if (!in_array($input->getOption('resource'), [true, false])) {
            throw new InvalidArgumentException('Invalid option.');
        }
        $output->writeln($this->_generateController($input));
    }

    public function _generateController($input)
    {
        list($dirname, $filename) = BaseCommand::dir_and_file($input);

        if (!file_exists($dirname . '/' . $filename)):
            $file = $dirname . '/' . $filename;
            $controller = str_replace(".php", "", $filename);
            touch($file);

            $option = $input->getOption('api');

            if (!$option) {
                $option = $input->getOption('resource');

                if (!$option) {
                    $fileContent = file_get_contents(__DIR__ . '/stubs/controller.stub');
                } else {
                    $fileContent = file_get_contents(__DIR__ . '/stubs/resourceController.stub');
                }
            } else {
                $fileContent = file_get_contents(__DIR__ . '/stubs/apiController.stub');
            }
            
            $fileContent = str_replace(["ClassName"], [$controller], $fileContent);
            file_put_contents($file, $fileContent);

            return "$controller created successfully";
        else:
            return "Controller already exists";
        endif;
    }
}