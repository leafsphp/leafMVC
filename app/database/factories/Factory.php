<?php

namespace App\Database\Factories;

use Leaf\Factory as Base;
use Illuminate\Support\Str;

/**
 * Base Factory Class
 * ----------------
 * You can define methods here that would be used
 * throughout your factory classes.
 */
class Factory extends Base
{
    public $str;

    /**@var \Faker\Generator $faker*/
    public $faker;

    public function __construct()
    {
        // Just for demo purposes, str is assigned here
        // so you can use it in all your factories.
        $this->str = Str::class;
        $this->faker = \Faker\Factory::create();
    }
}
