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
                'name' => 'Yamaha',
            ],
        );
        Brands::create(
            [
                'name' => 'Kawasaki',
            ],
        );
        Brands::create(
            [
                'name' => 'Honda',
            ],
        );
        Brands::create(
            [
                'name' => 'Suzuki',
            ],
        );
        Brands::create(
            [
                'name' => 'Ducati',
            ],
        );
    }
}
