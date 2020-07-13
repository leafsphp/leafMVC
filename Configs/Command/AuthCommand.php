<?php

namespace Config\Command;

use InvalidArgumentException;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Style\SymfonyStyle;
use Symfony\Component\Process\Exception\ProcessFailedException;
use Illuminate\Support\Str;

class AuthCommand extends Command
{
    protected static $defaultName = 'ui:auth';
    
    protected $signature = 'ui:auth
        { type=bootstrap : The preset type (bootstrap) }
        {--views : Only scaffold the authentication views}
        {--force : Overwrite existing views by default}';

    protected $description = 'Scaffold basic login and registration views and routes';

    protected $help = 'Scaffold basic login and registration views and routes';

    protected $views = [
        'auth/login.stub' => 'auth/login.vein',
        'auth/passwords/confirm.stub' => 'auth/passwords/confirm.vein',
        'auth/passwords/email.stub' => 'auth/passwords/email.vein',
        'auth/passwords/reset.stub' => 'auth/passwords/reset.vein',
        'auth/register.stub' => 'auth/register.vein',
        'auth/verify.stub' => 'auth/verify.vein',
        'home.stub' => 'home.vein'
    ];

    public function __construct(){
        $this->veinPath = dirname(dirname(__DIR__)) . '/app/views/';
        parent::__construct();
    }


    protected function configure()
    {
        $this 
            ->setDescription($this->description)
            ->setHelp($this->help)
            ->addOption("type", null, InputOption::VALUE_OPTIONAL, 'The preset type', 'bootstrap');
    }


    public function execute(InputInterface $input, OutputInterface $output)
    {
        if (!in_array($input->getOption('type'), ['bootstrap'])) {
            throw new InvalidArgumentException('Invalid preset.');
        }

        $this->coolConsole = new SymfonyStyle($input, $output);

        $this->ensureDirectoriesExist();

        $this->exportViews($input, $output);

        $this->exportBackend($output);
    }


    protected function ensureDirectoriesExist()
    {
        if (!is_dir($directory = 'app/views')) {
            mkdir($directory, 0755, true);
        }

        if (!is_dir($directory = 'app/views/auth/passwords')) {
            mkdir($directory, 0755, true);
        }
    }


    protected function exportViews($input, $output)
    {
        foreach ($this->views as $key => $value) {
            if (file_exists($view = 'app/views/'.$value)) {
                if (!$this->coolConsole->confirm("The [{$value}] view already exists. Do you want to replace it?", false)) {
                    continue;
                }
            }

            copy(
                __DIR__.'/Auth/'.$input->getOption('type').'-stubs/'.$key,
                $view
            );
        }

        $output->writeln("Authentication scaffolding generated successfully.");
    }

    protected function exportBackend($output)
    {
        touch('app/controllers/AuthController.php');
        touch('app/controllers/HomeController.php');

        file_put_contents(
            'app/controllers/AuthController.php',
            file_get_contents(__DIR__.'/Auth/stubs/controllers/AuthController.stub')
        );
        $output->writeln("Auth controller generated successfully.");

        file_put_contents(
            'app/controllers/HomeController.php',
            file_get_contents(__DIR__.'/Auth/stubs/controllers/HomeController.stub')
        );
        $output->writeln("Home controller generated successfully.");

        if (!file_exists('app/routes/routes.php')) {
            touch('app/routes/routes.php');
        }
        
        file_put_contents(
            'app/routes/routes.php',
            file_get_contents(__DIR__.'/Auth/stubs/routes.stub'),
            FILE_APPEND
        );
        $output->writeln("Auth routes generated successfully.");
    }
}