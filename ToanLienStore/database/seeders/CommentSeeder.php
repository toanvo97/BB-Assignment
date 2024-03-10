<?php

namespace Database\Seeders;

use App\Models\CustomerComment;
use Illuminate\Database\Seeder;

class CommentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $comment = [
            'user_id' => '1',
            'product_id' => '1',
            'description' => 'Greate product'
        ];

        CustomerComment::create($comment);
    }
}
