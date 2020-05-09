<?php

use Illuminate\Database\Seeder;
use Faker\Factory;
use App\User;


class WavesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {   
        // Initialize!
        $faker = Faker\Factory::create();

        // Let's make 25 Waves in just a few lines!
        foreach( range( 1, 25 ) as $index ) {
            DB::table( 'waves' )->insert( array(
                'user_id' => $faker->numberBetween($min = 1, $max = 5),
                'picture' => $faker->imageUrl($width = 640, $height = 480),
                'message' => $faker->catchphrase,
                'likes_count' => $faker->randomDigitNotNull,
                'created_at' => $faker->dateTime()
            ));
        }
    }
}
