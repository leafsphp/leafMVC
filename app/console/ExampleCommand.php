<?php

namespace App\Console;

use Aloe\Command;

class ExampleCommand extends Command
{
    protected static $defaultName = 'example';
    public $description = 'example command\'s description';
    public $help = 'example command\'s help';

    protected function config()
    {
        $this
            ->setArgument('argument', 'optional', 'argument description')
            ->setOption('option', 'o', 'required', 'option description');
    }

    protected function handle()
    {
        $this->comment(
            "example command's output {$this->argument('argument')} {$this->option('option')}"
        );
    }
}
