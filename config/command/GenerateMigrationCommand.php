<?php
    namespace Config\Command;

    use Symfony\Component\Console\Command\Command;
    use Symfony\Component\Console\Input\InputInterface;
    use Symfony\Component\Console\Output\OutputInterface;
    use Symfony\Component\Console\Input\InputArgument;
    use Illuminate\Support\Str;
    
    class GenerateMigrationCommand extends Command
    {
        // the name of the command (the part after "bin/console")
        protected static $defaultName = 'g:migration';

        public function __construct()
        {
            $this->migrationPath = dirname(dirname(__DIR__)) . "/app/database/migrations/";
            parent::__construct();
        }
    
        protected function configure()
        {
            $this 
                ->setDescription("Create a new migration file")
                ->setHelp("Create a new migration file")
                ->addArgument('migration', InputArgument::REQUIRED, 'migration file name');
        }
    
        protected function execute(InputInterface $input, OutputInterface $output)
        {
            $userInput = Str::plural($input->getArgument("migration"));
            $filename = Str::snake("Create_".$userInput);
            
            $actualFileName = date("Y_m_d_His").'_'.$filename.'.php';
            $file = $this->migrationPath.$actualFileName;
            
            touch($file);

            $className = Str::studly("Create".$input->getArgument("migration"));

            $fileContent = \file_get_contents(__DIR__ . '/stubs/migration.stub');

            $fileContent = str_replace(["ClassName", "tableName"], [$className, $userInput], $fileContent);
            
            file_put_contents($file, $fileContent);

            $output->writeln($actualFileName . ' generated successfully');
        }
    }