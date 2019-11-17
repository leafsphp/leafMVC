<?php

namespace Config\Command;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Input\InputArgument;
use Illuminate\Support\Str;

class GenerateTemplateCommand extends Command
{
    protected static $defaultName = 'g:template';

    public function __construct(){
        $this->templatePath = dirname(dirname(__DIR__)) . '/app/views/';
        parent::__construct();
    }

    protected function configure()
    {
        $this 
            ->setDescription("command to generate a new vein template")
            ->setHelp("Used to generate a new vein template file")
            ->addArgument("template", InputArgument::REQUIRED, 'template name');
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $template = $input->getArgument("template");

        $file = $this->templatePath . $template . '.vein.php';

        touch($file);

        $fileContent = \file_get_contents(__DIR__ . '/stubs/template.stub');
        \file_put_contents($file, $fileContent);

        $output->writeln($template . ' generated successfully');
    }
}