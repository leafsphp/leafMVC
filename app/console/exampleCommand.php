<?php
namespace App\Console;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputOption;

class ExampleCommand extends Command
{
    protected static $defaultName = 'example';

    protected $description = 'Testing example command';

    protected $help = 'Example command\'s help';

    public function __construct(){
        parent::__construct();
    }


    protected function configure()
    {
        $this 
            ->setDescription($this->description)
            ->setHelp($this->help)
            ->addOption('example', null, InputOption::VALUE_OPTIONAL, 'description', 'default');
    }


    public function execute(InputInterface $input, OutputInterface $output)
    {
        $this->outputSomething($input, $output);
    }


    protected function outputSomething($input, $output)
    {
		$option = $input->getOption('example');
        isset($option) ? $output->writeln("Example output. Your option was $option") : $output->writeln("Example output");
    }
}