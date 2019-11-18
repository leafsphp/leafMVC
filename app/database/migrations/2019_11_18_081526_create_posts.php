<?php 
    namespace App\Database\Migrations;

    use Leaf\Core\Database;
    
    class CreatePosts extends Database {
        public function __construct() {
            parent::__construct();
        }
        
        /**
         * Run the migrations.
         *
         * @return void
         */
        public function up()  {
            if(!$this->capsule::schema()->hasTable("posts")):
                $this->capsule::schema()->create("posts", function ($table) {
                    $table->increments('id');
                    $table->string('title');
                    $table->mediumText('body');
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
            $this->capsule::schema()->dropIfExists("posts");
        }
    }