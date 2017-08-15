<?php

use Illuminate\Database\Seeder;

class EventsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('events')->insert([
        	'name_eve'=>'Evento de ciclismo',
        	'description'=>'Evento de ciclismo en la punta palma',
        	'slug'=>'evento-de-ciclismo',
        	'quantity'=>50,
        	'img'=>'1446ciclismo.jpg',
        	'price'=>250,
            'date_start'=>'08-12-2017',
            'date_end'=>'11-12-2017',
            'site'=>'Barcelona boyaca III',
        	'category_id'=>1,
        	]);
    }
}
