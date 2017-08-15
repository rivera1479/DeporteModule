<?php

use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
        	'name_cat'=>'Ciclismo',
        	'description'=>'Evento de competencia de ciclismo'
        	]);

        DB::table('categories')->insert([
        	'name_cat'=>'Boxeo',
        	'description'=>'Evento de competencia de boxeo'
        	]);
    }
}
