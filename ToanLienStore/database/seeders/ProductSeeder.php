<?php

namespace Database\Seeders;

use App\Models\CustomerComment;
use App\Models\Product;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS = 0');
        $products = [
            [
                'id' => 1,
                'name' => 'Seeds of Change Organic Quinoe',
                'price' => rand(200, 500),
            ],
            [
                'id' => 2,
                'name' => 'All Natural Italian-Style Chicken Meatballs',
                'price' => rand(200, 500),
            ],
            [
                'id' => 3,
                'name' => 'Angie’s Boomchickapop Sweet & Salty Kettle Corn',
                'price' => rand(200, 500),
            ],
            [
                'id' => 4,
                'name' => 'Foster Farms Takeout Crispy Classic',
                'price' => rand(70, 90),
            ],
            [
                'id' => 5,
                'name' => 'Blue Diamond Almonds Lightly',
                'price' => rand(40, 50),
            ],
            [
                'id' => 6,
                'name' => 'Chobani Complete Vanilla Greek',
                'price' => rand(50, 60),
            ],
            [
                'id' => 7,
                'name' => 'Canada Dry Ginger Ale – 2 L Bottle',
                'price' => rand(110, 130),
            ],
            [
                'id' => 8,
                'name' => 'Encore Seafoods Stuffed Alaskan',
                'price' => rand(110, 130),
            ],
            [
                'id' => 9,
                'name' => 'Gorton’s Beer Battered Fish Fillets',
                'price' => rand(110, 130),
            ],
            [
                'id' => 10,
                'name' => 'Haagen-Dazs Caramel Cone Ice Cream',
                'price' => rand(200, 500),
            ],
            [
                'id' => 11,
                'name' => 'Nestle Original Coffee-Mate Coffee Creamer',
                'price' => rand(110, 130),
            ],
            [
                'id' => 12,
                'name' => 'Naturally Flavored Cinnamon Vanilla Light Roast Coffee',
                'price' => rand(110, 130),
            ],
            [
                'id' => 13,
                'name' => 'Pepperidge Farm Farmhouse Hearty White Bread',
                'price' => rand(110, 130),
            ],
            [
                'id' => 14,
                'name' => 'Organic Frozen Triple Berry Blend',
                'price' => rand(110, 130),
            ],
            [
                'id' => 15,
                'name' => 'Oroweat Country Buttermilk Bread',
                'price' => rand(110, 130),
            ],
            [
                'id' => 16,
                'name' => 'Foster Farms Takeout Crispy Classic Buffalo Wings',
                'price' => rand(110, 130),
            ],
            [
                'id' => 17,
                'name' => 'Angie’s Boomchickapop Sweet & Salty Kettle Corn',
                'price' => rand(110, 130),
            ],
            [
                'id' => 18,
                'name' => 'All Natural Italian-Style Chicken Meatballs',
                'price' => rand(110, 130),
            ],
            [
                'id' => 19,
                'name' => 'Simply Lemonade with Raspberry Juice',
                'price' => rand(110, 130),
            ],
            [
                'id' => 20,
                'name' => 'Perdue Simply Smart Organics Gluten Free',
                'price' => rand(110, 130),
            ],
            [
                'id' => 21,
                'name' => 'Chen Watermelon',
                'price' => rand(110, 130),
            ],
            [
                'id' => 22,
                'name' => 'Organic Cage-Free Grade A Large Brown Eggs',
                'price' => rand(110, 130),
            ],
            [
                'id' => 23,
                'name' => 'Colorful Banana',
                'price' => rand(110, 130),
            ],
            [
                'id' => 24,
                'name' => 'Signature Wood-Fired Mushroom and Caramelized',
                'price' => rand(110, 130),
            ],
        ];
        
        CustomerComment::query()->truncate();
        Product::query()->truncate();

        foreach($products as $item)
        {
            $item['quantity'] = rand(1,20);
            $item['brand_id'] = rand(1,3);
    
            //random image in public path
            if (File::exists(public_path('client/img/product/product-' . rand(1,10) . '.jpg'))) {
                $item['images'] = 'client/img/product/product-' . rand(1,10) . '.jpg';
            }

            $product = Product::query()->create($item);

            //sync random category id for product
            $product->categories()->sync([
                rand(1, 3),
            ]);
        }
    }
}
