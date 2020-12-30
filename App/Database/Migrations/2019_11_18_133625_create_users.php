<?php

namespace App\Database\Migrations;

use Leaf\Database;
use Illuminate\Database\Schema\Blueprint;

class CreateUsers extends Database {
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()  {
		if(!$this->capsule::schema()->hasTable("users")):
			$this->capsule::schema()->create("users", function (Blueprint $table) {
				$table->increments('id');
				$table->string('username');
				$table->string('name')->nullable();
				$table->string('email')->unique();
				$table->timestamp('email_verified_at')->nullable();
				$table->string('password');
				$table->rememberToken();
				$table->timestamps();
			});
		endif;
	}
	
	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down() {
		$this->capsule::schema()->dropIfExists("users");
	}
}
