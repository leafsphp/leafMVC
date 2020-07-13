<?php

namespace Config\Command;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputOption;

class GenerateTemplateCommand extends Command
{
    protected static $defaultName = 'g:template';

    public function __construct(){
        parent::__construct();
        $this->templatePath = dirname(dirname(__DIR__)) . views_path(null, true);
    }

    protected function configure()
    {
        $this
            ->setDescription("Create a new blade template")
            ->setHelp("Create a new blade template")
            ->addArgument("template", InputArgument::REQUIRED, 'template name')
            ->addOption("type", "t", InputOption::VALUE_OPTIONAL, "Type of template to generate", "blade");
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $template = $input->getArgument("template");
        $extension = $input->getOption("type") === "blade" ? ".blade.php" : ".vein.php";

        $file = $this->templatePath . $template . $extension;

        touch($file);

        $fileContent = \file_get_contents($input->getOption("type") === "blade" ? __DIR__ . '/stubs/template.stub' : __DIR__ . '/stubs/template-veins.stub');
        \file_put_contents($file, $fileContent);

        $output->writeln($template . ' generated successfully');
    }
}