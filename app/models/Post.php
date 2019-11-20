<?php
    namespace App\Models;

    use Leaf\Core\Database;
    new Database();

    use Leaf\Core\Model;

    class Post extends Model {
        /**
         * The attributes that are mass assignable.
         *
         * @var array
         */
        protected $fillable = [
            
        ];
        protected $table = 'posts';
    }