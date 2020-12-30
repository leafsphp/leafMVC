<?php
namespace App\Console;

use Aloe\Command;

class ExampleCommand extends Command
{
    public $name = "example";
    public $description = "example command's description";
    public $help = "example command's help";

    public function config()
    {
        // you can add arguments and options in the config method
        $this
            ->setArgument("argument", "required", "argument description")
            ->setOption("option", "o", "required", "option description");
    }

    public function handle()
    {
        $this->comment(
            "example command's output {$this->argument('argument')} {$this->option('option')}"
        );
    }
}
