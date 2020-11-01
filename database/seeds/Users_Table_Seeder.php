<?php

use Illuminate\Database\Seeder;

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
            'email' => 'test@text.com',
            'password' => bcrypt('password'),
            ]);
    }
        
}