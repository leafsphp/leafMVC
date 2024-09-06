<?php 

namespace App\Console;

class Commands
{
    /**
     * Register commands
     * 
     * @param $console
     * @return void
     * 
     */
    public static function register($console, $scan=true): void
    {
        $console->register([
            ExampleCommand::class,
        ]);
    }
}
