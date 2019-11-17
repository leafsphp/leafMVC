<?php 
    use Leaf\Core\Database;
    
    class CreatePosts extends Database {
        public function __construct() {
            parent::__construct();
        }
        
        public function up()  {
            if(!$this->capsule::schema()->hasTable("posts")):
                $this->capsule::schema()->create("posts", function ($table) {
                    $table->increments('id');
                    $table->timestamps();
                });
            endif;
        }
        
        public function down() {
            $this->capsule::schema()->dropIfExists("posts");
        }
    }