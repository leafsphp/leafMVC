<?php

namespace App\Database\Migrations;

use Leaf\Database;

class CreatePasswordResets extends Database {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()  {
        if(!$this->capsule::schema()->hasTable("password_resets")):
            $this->capsule::schema()->create("password_resets", function ($table) {
                $table->string('email')->index();
                $table->string('token');
                $table->timestamp('created_at')->nullable();
            });
        endif;
    }
    
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        $this->capsule::schema()->dropIfExists("password_resets");
    }
}
