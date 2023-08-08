<?php
namespace App\Database\Seeds;

use App\Models\User;
use App\Database\Factories\UserFactory;
use Illuminate\Database\Seeder;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     * @return void
     */
    public function run()
    {
        // You can directly create db records like this 👇

        // $user = new User();
        // $user->username = 'mychi';
        // $user->fullname = 'Mychi Darko';
        // $user->email = 'mychi@leafphp.dev';
        // $user->password = \Leaf\Password::hash('password');
        // $user->save();

        // You can also use factories like this 👇
        (new UserFactory)->create(5)->save();

        // even better, you can use them together :-)
    }
}
