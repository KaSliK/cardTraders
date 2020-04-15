<?php

use Illuminate\Database\Seeder;

class PhotosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();

        for ($i = 1; $i <= 30; $i++) {
            DB::table('photos')->insert([
                'path' => $faker->imageUrl(100, 200, 'people')
            ]);
        }
    }
}
