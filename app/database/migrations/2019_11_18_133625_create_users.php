<?php

use Leaf\Schema;
use Leaf\Database;
use Illuminate\Database\Schema\Blueprint;

class CreateUsers extends Database
{
    /**
     * Run the migrations.
     * @return void
     */
    public function up()
    {
        // if (!static::$capsule::schema()->hasTable("users")):
        // 	static::$capsule::schema()->create("users", function (Blueprint $table) {
        //         $table->increments('id');
        // 		$table->string('username');
        // 		$table->string('fullname');
        // 		$table->string('email')->unique();
        // 		$table->timestamp('email_verified_at')->nullable();
        // 		$table->string('password');
        // 		$table->rememberToken();
        // 		$table->timestamps();
        // 	});
        // endif;

        /**
         * Leaf Schema allows you to build migrations
         * from a JSON representation of your database
         *
         * Check app/database/schema/users.json for an example
         *
         * Docs @ https://leafphp.dev/docs/mvc/schema.html
         */
        // you can now build your migrations with schemas
        Schema::build('users');
    }

    /**
     * Reverse the migrations.
     * @return void
     */
    public function down()
    {
        static::$capsule::schema()->dropIfExists('users');
    }
}
