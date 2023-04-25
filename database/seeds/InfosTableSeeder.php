<?php

use Illuminate\Database\Seeder;
use App\Models\infos;

class InfosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        infos::create([
        	'nom'   => 'location',
	        'value' => '77, seventh avenue, Brat road USA',
        ]);

        infos::create([
        	'nom'   => 'phone',
	        'value' => '+243 824 176 842',
        ]);

        infos::create([
        	'nom'   => 'email',
	        'value' => 'info@wenze.com',
        ]);

        infos::create([
        	'nom'   => 'facebook',
	        'value' => 'Facebook',
	        'lien'  => 'http://www.facebook.com/',
        ]);

        infos::create([
        	'nom'   => 'twitter',
	        'value' => 'Twitter',
	        'lien'  => 'http://www.twitter.com/',
        ]);
    }
}
