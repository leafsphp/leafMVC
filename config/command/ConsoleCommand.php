<?php

namespace Config\Command;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Psy\Shell;

class ConsoleCommand extends Command {

    protected static $defaultName = "stalk";

    protected function configure()  {
        $this
            ->setDescription("Interact with your application")
            ->setHelp("Interact with your application");
    }


    protected function execute(InputInterface $input, OutputInterface $output) {
        // $output->writeln("Leaf interactive shell activated");
        $shell = new Shell();
        $output->write($shell->run());
    }
}