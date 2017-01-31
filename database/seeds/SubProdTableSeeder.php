<?php

use Illuminate\Database\Seeder;
use App\SubProd;

class SubProdTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $sub = new SubProd;
        $sub->name = 'Poster Calendar';
        $sub->main_id = 1;
        $sub->description= "Anbalak mo:
this:";
        $sub->is_size= 1;
        $sub->is_paperType= 1;
        $sub->is_corner= 0;
        $sub->is_lam= 0;
        $sub->is_substrate= 0;
        $sub->is_per= 0;
        $sub->is_color= 0;
        $sub->is_colorFly= 0;
      	$sub->save();
    }
}
