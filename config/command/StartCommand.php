<?php 

namespace Config\Command;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Process\Process;
use Symfony\Component\Process\Exception\ProcessFailedException;
use Illuminate\Support\Str;

class StartCommand extends Command
{
    protected static $defaultName = "start";

    protected function configure()
    {
        $this
            ->setHelp("command used to start php server")
            ->setDescription("command use to start php server on a port")
            ->addArgument("port", InputArgument::OPTIONAL, "port number");
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $port = $input->getArgument("port") ? (int)$input->getArgument("port") : 3000; 

        $output->write(shell_exec("php -S localhost:{$port}"));
    }
}