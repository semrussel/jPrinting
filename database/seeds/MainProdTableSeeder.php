<?php

use Illuminate\Database\Seeder;
use App\MainProd;


class MainProdTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $main = new MainProd;
        $main->name = 'Calendar';
        $main->is_subcat = 1;
        $main->description = 'NONE';
        $main->logo = 'img/serv-01.jpg';
      	$main->save();

      	$main = new MainProd;
        $main->name = 'Souvenir Program';
        $main->is_subcat = 0;
        $main->description= "Anbalak mo:
        					this:";
        $main->logo = 'img/serv-09.jpg';
        $main->is_size= 1;
        $main->is_paperType= 1;
        $main->is_corner= 0;
        $main->is_lam= 0;
        $main->is_substrate= 0;
        $main->is_per= 0;
        $main->is_color= 0;
        $main->is_colorFly= 0;
      	$main->save();
    }
}