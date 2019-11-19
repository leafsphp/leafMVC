<?php

namespace Config\Command;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Input\InputArgument;
use Illuminate\Support\Str;

class DatabaseMigrationCommand extends Command {
    
    protected static $defaultName = "db:migrate";
    
    public function __construct() {
        $this->migrationPath = dirname(dirname(__DIR__)) . '/app/database/migrations/';
        parent::__construct();
    }
    
    protected function configure() {
        $this
        ->setDescription("Run the database migrations")
        ->setHelp("Run the database migrations");
    }
    
    
    protected function execute(InputInterface $input, OutputInterface $output) {
        $this->_runMigrations($output);
    }
    
    public function _runMigrations($output)
    {
        $migrations = glob($this->migrationPath . '*.php');
        
        foreach ($migrations as $migration) {
            $file = pathinfo($migration);
            $filename = $file['filename'];
                        
            if ($filename !== "Schema"):
                $className = '\App\Database\Migrations\\' . Str::studly(\substr($filename, 17));
                $this->migrate($className, $filename);

                $output->writeln('db migration on => ' . str_replace(dirname(dirname(__DIR__)) . '/app/database/migrations/', "", $migration));
            endif;
        }
    }

    protected function migrate($className, $filename) {
        require_once "app/database/migrations/$filename.php";

        $class = new $className;
        $class->up();
    }
}