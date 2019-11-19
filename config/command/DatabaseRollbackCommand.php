<?php

namespace Config\Command;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Input\InputArgument;
use Illuminate\Support\Str;

class DatabaseRollbackCommand extends Command  {

    protected static $defaultName = "db:rollback";

    public function __construct()
    {
        $this->migrationPath = dirname(dirname(__DIR__)) . '/app/database/migrations/';
        parent::__construct();
    }

    protected function configure()
    {
        $this
            ->setDescription("Rollback all database migrations")
            ->setHelp("Rollback all database migrations")
            ->addArgument('step', InputArgument::REQUIRED, 'step required');
    }


    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $this->_runMigrations($input, $output);
    }

    public function _runMigrations($input, $output)
    {
        $migrations = glob($this->migrationPath . '*.php');
        $step = $input->getArgument('step');

        if($step !== 'all'):
            $migrations = array_slice($migrations, -abs($step), abs($step), true);
        endif;

        foreach ($migrations as $migration) {
            $file = pathinfo($migration);
            $filename = $file['filename'];

            require_once $migration;
            $className = 'App\Database\Migrations\\'.Str::studly(\substr($filename, 17));

            $class = new $className;
            $class->down();

            $output->writeln('db rollback on => ' . str_replace(dirname(dirname(__DIR__)) . '/app/database/migrations/', "", $migration));
        }
    }
}