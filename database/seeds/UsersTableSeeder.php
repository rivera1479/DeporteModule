<?php

use Illuminate\Database\Seeder;

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
        	'name'=>'Jesus',
        	'last_name'=>'Rivera',
        	'email'=>'jesusfriverar@gmail.com',
        	'password'=>bcrypt('123456'),
        	'rol'=>'1'
        	]);
    }
}
