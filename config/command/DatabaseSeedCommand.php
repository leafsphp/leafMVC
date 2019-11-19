<?php

namespace Config\Command;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class DatabaseSeedCommand extends Command {

    protected static $defaultName = "db:seed";

    public function __construct() {
        $this->seedPath = dirname(dirname(__DIR__)) . '/app/database/seeds/';
        parent::__construct();
    }

    protected function configure()
    {
        $this
            ->setDescription("Seed the database with records")
            ->setHelp("Seed the database with records");
    }


    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $seed = new \App\Database\Seeds\DatabaseSeeder;
        $seed->run();

        $output->writeln("Database seed complete");
    }
}