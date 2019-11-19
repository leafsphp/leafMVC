<?php

namespace Config\Command;

use InvalidArgumentException;
use Symfony\Component\Process\Process;
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
            ->addOption("all", "a", InputOption::VALUE_NONE, 'Create a model, migration and template for controller')
            ->addOption("template", "t", InputOption::VALUE_NONE, 'Create a template for controller')
            ->addOption("view", null, InputOption::VALUE_NONE, 'Create a template for controller')
            ->addOption("model", "m", InputOption::VALUE_NONE, 'Create a model for controller')
            ->addOption("resource", "r", InputOption::VALUE_NONE, 'Create a resource controller')
            ->addOption("api", null, InputOption::VALUE_NONE, 'Create an API controller');
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        if (!in_array($input->getOption('resource'), [true, false])) {
            throw new InvalidArgumentException('Invalid option.');
        }
        $output->writeln($this->_generateController($input, $output));
    }

    public function _generateController($input, $output)
    {
        list($dirname, $filename) = BaseCommand::dir_and_file($input);

        if (!file_exists($dirname . '/' . $filename)):
            $file = $dirname . '/' . $filename;
            $controller = str_replace(".php", "", $filename);
            touch($file);

            if (!$input->getOption('api')) {
                if (!$input->getOption('resource')) {
                    $fileContent = file_get_contents(__DIR__ . '/stubs/controller.stub');
                } else {
                    $fileContent = file_get_contents(__DIR__ . '/stubs/resourceController.stub');
                }
            } else {
                $fileContent = file_get_contents(__DIR__ . '/stubs/apiController.stub');
            }

            if ($input->getOption('all')) {
                $process = new Process("php leaf g:model ".Str::studly(str_replace("Controller", "", $controller))." -m");
                $process->run();
                $output->writeln("Model ".Str::studly(str_replace("Controller", "", $controller))." generated successfully");
                $process = new Process("php leaf g:template ".Str::lower(str_replace("Controller", "", $controller)));
                $process->run();
                $output->writeln(Str::lower(str_replace("Controller", "", $controller)).".vein.php generated successfully");
            } elseif ($input->getOption('model')) {
                $process = new Process("php leaf g:model ".Str::studly(str_replace("Controller", "", $controller)));
                $process->run();
                $output->writeln("Model ".Str::studly(str_replace("Controller", "", $controller))." generated successfully");
            } elseif ($input->getOption('template') || $input->getOption('view')) {
                $process = new Process("php leaf g:template ".Str::lower(str_replace("Controller", "", $controller)));
                $process->run();
                $output->writeln(Str::lower(str_replace("Controller", "", $controller)).".vein.php generated successfully");
            }
            
            $fileContent = str_replace(["ClassName"], [$controller], $fileContent);
            file_put_contents($file, $fileContent);

            return "$controller created successfully";
        else:
            return str_replace(".php", "", $filename)." already exists";
        endif;
    }
}