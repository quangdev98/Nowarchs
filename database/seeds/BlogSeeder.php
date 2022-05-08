<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BlogSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            'title'=> 'demo',
            'slug'=> 'demo',
            'images'=> '',
            'admin_id'=> '1',
            'contents'=> 'content',
            'status'=> '1',
            "created_at" => date("Y-m-d H:i:s"),
            "updated_at" => date("Y-m-d H:i:s"),

        ];
        DB::table('blogs')->insert($data);
    }
}
