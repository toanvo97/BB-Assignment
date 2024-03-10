<?php

namespace Database\Seeders;

use App\Models\ProductCategory;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categories = [
            [
                'name' => 'Fresh Fruit',
            ],
            [
                'name' => 'Wines & Drinks',
            ],
            [
                'name' => 'Vegetables',
            ],
        ];

        ProductCategory::query()->truncate();

        foreach ($categories as $index => $item) {
            $item['order'] = $index;
            ProductCategory::query()->create($item);
        }
    }
}
