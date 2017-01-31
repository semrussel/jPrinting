<?php

use Illuminate\Database\Seeder;
use App\Select;

class SelectsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $select = new Select;
        $select->name = '11in x 8.5in ; Folded: 5.5in x 8.5in';
        $select->type = 'size';
        $select->save();

        $select = new Select;
        $select->name = '17in x 11in; Folded: 8.5in x 11in';
        $select->type = 'size';
        $select->save();

        $select = new Select;
        $select->name = 'Cover: 300 gsm C2S(Colored)';
        $select->type = 'paperType';
        $select->save();

        $select = new Select;
        $select->name = 'Inside: 100 gsm C2S (Colored)';
        $select->type = 'paperType';
        $select->save();
    }
}
