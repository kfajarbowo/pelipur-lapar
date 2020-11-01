<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class ItemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        $faker = Faker::create('id_ID');
 
        for($i = 1; $i <= 10; $i++){
 
              // insert data ke table pegawai menggunakan Faker
            DB::table('items')->insert([
                'category_id' => $faker->randomDigitNotNull,
                'image' => $faker->image('public/uploads/item',640,480, null, false),
                'name' => $faker->name,
                'description' => $faker->text,
                'price' => $faker->numberBetween(8000,10000),
                'stock' => $faker->numberBetween(10,100),

            ]);
 
        }

    }
}
