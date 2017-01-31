<?php

use Illuminate\Database\Seeder;
use App\PivotSelectProd;

class PivotSelectProdTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $select = new PivotSelectProd;
        $select->select_id = 1;
        $select->service_id = 2;
        $select->is_main = 1;
        $select->save();

        $select = new PivotSelectProd;
        $select->select_id = 2;
        $select->service_id = 2;
        $select->is_main = 1;
        $select->save();

        $select = new PivotSelectProd;
        $select->select_id = 3;
        $select->service_id = 2;
        $select->is_main = 1;
        $select->save();

        $select = new PivotSelectProd;
        $select->select_id = 4;
        $select->service_id = 2;
        $select->is_main = 1;
        $select->save();


    }
}
