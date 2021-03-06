<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            'name'=> 'demo',
            'slug'=> 'demo',
            'images'=> '',
            'price'=> '1',
            'category_id'=> '1',
            'contents'=> 'content',
            'status'=> '1',
            "created_at" => date("Y-m-d H:i:s"),
            "updated_at" => date("Y-m-d H:i:s"),

        ];
        DB::table('products')->insert($data);
    }
}
