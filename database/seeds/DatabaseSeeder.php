<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UsersTableSeeder::class);
        $this->call(MainProdTableSeeder::class);
        $this->call(SubProdTableSeeder::class);
        $this->call(SelectsTableSeeder::class);
        $this->call(PivotSelectProdTableSeeder::class);

    }
}
