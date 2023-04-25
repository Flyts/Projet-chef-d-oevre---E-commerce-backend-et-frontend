<?php

use App\Models\menus;
use Illuminate\Database\Seeder;

class MenusesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        menus::create([
        	'name' => 'Accueil',
        	'lien' => 'home',
        ]);

        menus::create([
        	'name' => 'Contact',
        	'lien' => 'contact',
        ]);

        menus::create([
        	'name' => 'A Propos de Nous',
        	'lien' => 'a-propos-de-nous',
        ]);
    }
}
