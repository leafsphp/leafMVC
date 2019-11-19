<?php

namespace Config\Command;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Input\InputArgument;
use Illuminate\Support\Str;

class GenerateHelperCommand extends Command
{
    protected static $defaultName = 'g:helper';

    public function __construct(){
        $this->helperPath = dirname(dirname(__DIR__)) . '/app/helpers/';
        parent::__construct();
    }

    protected function configure()
    {
        $this 
            ->setDescription("Create a new helper class")
            ->setHelp("Create a new helper class")
            ->addArgument("helper", InputArgument::REQUIRED, 'helper name');
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $helper = Str::studly($input->getArgument("helper").'Helper');

        $file = $this->helperPath . $helper . '.php';

        touch($file);

        $fileContent = \file_get_contents(__DIR__ . '/stubs/helper.stub');
        $fileContent = str_replace('ClassName', $helper, $fileContent);
        \file_put_contents($file, $fileContent);

        $output->writeln($helper . ' generated successfully');
    }
}