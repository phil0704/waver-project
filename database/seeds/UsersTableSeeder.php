<?php

use Illuminate\Database\Seeder;
use Faker\Factory;
use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Initialize!
        $faker = Factory::create();

        // Let's make 25 users in just a few lines!
        foreach( range( 1, 25 ) as $index ) {
            $user = new user;
            $user->name = $faker->name;
            $user->email = $faker->email;
            $user->location = $faker->country;
            $user->password = 'password';
            $user->save();
        }
    }
}
