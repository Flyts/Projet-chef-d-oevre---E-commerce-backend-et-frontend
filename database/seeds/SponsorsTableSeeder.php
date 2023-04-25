<?php

use Illuminate\Database\Seeder;
use App\Models\Sponsors;

class SponsorsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Sponsors::create([
        	'name'  => 'danimt',
	        'image' => 'img/sponsor/1.png',
        ]);

        Sponsors::create([
        	'name'  => 'holli',
	        'image' => 'img/sponsor/2.png',
        ]);

        Sponsors::create([
        	'name'  => 'jej wedding',
	        'image' => 'img/sponsor/3.png',
        ]);

        Sponsors::create([
        	'name'  => 'black plema',
	        'image' => 'img/sponsor/4.png',
        ]);

        Sponsors::create([
        	'name'  => 'fashion live style',
	        'image' => 'img/sponsor/5.png',
        ]);
    }
}
