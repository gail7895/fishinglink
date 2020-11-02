<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Users_Table_Seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => '',
            'email' => 'test@test.com',
            'password' => bcrypt('password'),
            ]);
    }
        
}