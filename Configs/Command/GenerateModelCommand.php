<?php
namespace Config\Command;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputOption;
use Illuminate\Support\Str;

class GenerateModelCommand extends Command
{
    protected static $defaultName = 'g:model';

    public function __construct()
    {
        parent::__construct();
        
        $this->migrationPath = dirname(dirname(__DIR__)) . migrations_path();
        $this->modelPath  = dirname(dirname(__DIR__)) . models_path();
    }

    protected function configure()
    {
        $this 
            ->setDescription("Create a new model class")
            ->setHelp("Create a new model class")
            ->addArgument('model', InputArgument::REQUIRED, 'model file name')
            ->addOption("migration", "m", InputOption::VALUE_NONE, 'Create a migration for model');
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $model = $this->modelPath . Str::singular(Str::studly($input->getArgument("model"))) . '.php';

        if (!file_exists($model)):
            $model = $this->_createModel($input);
            $output->writeln($model . ' model generated');

            if ($input->getOption('migration')):
                $migration = $this->_createMigration($input);
                $output->writeln($migration . ' file generated');
            endif;
        else:
            $output->writeln("Model already exists");
        endif;
    }

    public function _createModel($input): String
    {
        $model = Str::singular(Str::studly($input->getArgument("model")));
        $fileContent = \file_get_contents(__DIR__ . '/stubs/model.stub');
        $fileContent = str_replace("ClassName", $model, $fileContent);

        file_put_contents($this->modelPath . "{$model}.php", $fileContent);

        return $model;
    }

    public function _createMigration($input)
    {
        $model = $input->getArgument("model");
        $filename = Str::snake(Str::plural($model));
        $file = $this->migrationPath . date("Y_m_d_His") . '_create_' . $filename . '.php';

        touch($file);

        $className = 'Create' . Str::studly($filename);
        $tableName = \strtolower(Str::plural($model));

        $fileContent = \file_get_contents(__DIR__ . '/stubs/migration.stub');

        $fileContent = str_replace(
            ["ClassName", "tableName"],
            [$className, "{$tableName}"],
            $fileContent
        );
        file_put_contents($file, $fileContent);

        return $file;
    }
}
