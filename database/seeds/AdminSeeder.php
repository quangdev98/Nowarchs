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
            'password'=> Hash::make('12345678')
        ];
        DB::table('admins')->insert($data);
    }
}
