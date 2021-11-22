<?php

use Leaf\Database;

class CreatePasswordResets extends Database {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()  {
        if(!static::$capsule::schema()->hasTable("password_resets")):
            static::$capsule::schema()->create("password_resets", function ($table) {
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
        static::$capsule::schema()->dropIfExists("password_resets");
    }
}
