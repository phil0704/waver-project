<?php

use Illuminate\Database\Seeder;

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
                'message' => $faker->catchphrase,
                'created_at' => $faker->dateTime()
            ));
        }
    }
}
