<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(CategoriesTableSeeder::class);
        $this->call(ProductsTableSeeder::class);
        $this->call(MenusesTableSeeder::class);
        $this->call(InfosTableSeeder::class);
        $this->call(CodeTransactionTableSeeder::class);
        $this->call(SousCategorysTableSeeder::class);
        $this->call(OtherSousCategorysTableSeeder::class);
        $this->call(MarquesTableSeeder::class);
        $this->call(CouleursTableSeeder::class);
        $this->call(TaillesTableSeeder::class);
        $this->call(SponsorsTableSeeder::class);
    }
}
