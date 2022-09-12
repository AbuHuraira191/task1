<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Faker\Factory as Faker;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $faker = Faker::create();
        $name=['shirt','pent','shoes','slippers','joggers','suit','soaks'];
        for ($j=0;$j<6;$j++)
        {
            $product=new Product;
            $product->title=$name[$j];
            $product->description=$faker->paragraph;
            $product->price=$faker->randomDigitNotNull;
            $product->category_id=$faker->numberBetween($min = 1, $max = 3);
            $product->save();
        }

    }
}
