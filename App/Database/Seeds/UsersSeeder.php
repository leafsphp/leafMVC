<?php
namespace App\Database\Seeds;

use App\Database\Factories\UserFactory;
use Illuminate\Database\Seeder;
use App\Models\User;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // You can directly create db records
        // $user = new User();
        // $user->name = 'Mychi';
        // $user->email = "mickdd22@gmail.com";
        // $user->password = md5("password.demo");
        // $user->save();

        // You can also use factories like this
        (new UserFactory)->create(5)->save();

        // even better, you can use them together :-)
    }
}
