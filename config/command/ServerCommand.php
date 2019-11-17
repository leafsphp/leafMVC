<?php 

namespace Config\Command;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Input\InputArgument;
use Illuminate\Support\Str;

class ServerCommand extends Command
{
    protected static $defaultName = "serve";

    protected function configure()
    {
        $this
            ->setHelp("Start the leaf app server")
            ->setDescription("Run your Leaf app")
            ->addArgument("port", InputArgument::OPTIONAL, "port number");
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $port = $input->getArgument("port") ? (int)$input->getArgument("port") : 5500; 

        $output->write("Leaf development server started: http://localhost:$port\n");
        $output->write("Happy gardening!! \n");
        $output->write(shell_exec("php -S localhost:{$port}"));
    }
}