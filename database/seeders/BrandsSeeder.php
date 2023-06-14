<?php

namespace Database\Seeders;

use App\Models\Brands;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BrandsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Brands::create(
            [
                'name' => 'Clothes',
            ],
        );
        Brands::create(
            [
                'name' => 'T-shirt',
            ],
        );
        Brands::create(
            [
                'name' => 'Accesories',
            ],
        );
        Brands::create(
            [
                'name' => 'Shoes',
            ],
        );
        Brands::create(
            [
                'name' => 'Pants',
            ],
        );
    }
}
