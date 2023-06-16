<?php

namespace Database\Seeders;

use App\Models\Brands;
use App\Models\Categories;
use App\Models\Products;
use App\Models\Status;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
        $faker = \Faker\Factory::create();

        $categories = Categories::all()->pluck('id')->toArray();
        $brand = Brands::all()->pluck('name')->toArray();
        $status = Status::all()->pluck('status')->toArray();

        for ($i=0; $i < 20 ; $i++) {
            $product = Products::create([
                'category_id' => $faker->randomElement($categories),
                'name' => $faker->sentence(3),
                'price' => $faker->numberBetween(100000, 1000000),
                'sale_price' => $faker->numberBetween(100000, 1000000),
                'brands' => $faker->randomElement($brand),
                'image' => '1686041426.jpg', 
                'status' => $faker->randomElement($status), 
            ]);
        }
    }
}
