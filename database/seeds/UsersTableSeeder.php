<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'role_id'=>'1',
            'name'=>'Admin',
            'username'=>'Madi',
            'email'=>'seisembaevm@mail.ru',
            'password'=>bcrypt('123456789'),
        ]);

        DB::table('users')->insert([
            'role_id'=>'2',
            'name'=>'Author',
            'username'=>'Balgyn',
            'email'=>'balgyn@mail.ru',
            'password'=>bcrypt('123456789'),
        ]);
    }
}
