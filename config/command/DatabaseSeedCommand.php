<?php

namespace Config\Command;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class DatabaseSeedCommand extends Command
{

    protected static $defaultName = "db:seed";

    public function __construct()
    {
        $this->seedPath = dirname(__DIR__) . '/migrations/seeds/';
        parent::__construct();
    }

    protected function configure()
    {
        $this
            ->setDescription("used to run seeds")
            ->setHelp("Command used to run seeds");
    }


    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $seeds = glob($this->seedPath . '*.php');

        foreach ($seeds as $seed) {
            $file = pathinfo($seed);
            $filename = '\App\Migrations\Seeds\\' . $file['filename'];

            $class = new $filename;
            $class->run();
        }
    }
}