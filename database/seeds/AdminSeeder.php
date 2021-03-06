<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            'email'=> 'dvq.dev@gmail.com',
            'password'=> Hash::make('12345678'),
            'avatar' => '',
            'name' => 'Quangdev',
            'phone' => '0868966562',
            "created_at" => date("Y-m-d H:i:s"),
            "updated_at" => date("Y-m-d H:i:s"),

        ];
        DB::table('admins')->insert($data);
    }
}
