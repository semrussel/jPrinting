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
      // 1
      $sub = new SubProd;
      $sub->name = 'Poster Calendar';
      $sub->main_id = 1;
      $sub->description= "";
      $sub->is_lam= 1;
      $sub->is_design= 1;
      $sub->save();

      // 2
      $sub = new SubProd;
      $sub->name = 'Monthly Wall Calendar';
      $sub->main_id = 1;
      $sub->description= "";
      $sub->is_lam= 1;
      $sub->is_design= 1;
      $sub->save();

      // 3
      $sub = new SubProd;
      $sub->name = 'Table Tent Calendar';
      $sub->main_id = 1;
      $sub->description= "";
      $sub->is_lam= 1;
      $sub->is_design= 1;
      $sub->save();

      // 4
      $sub = new SubProd;
      $sub->name = 'Vinyl Round Sticker';
      $sub->main_id = 2;
      $sub->description= "";
      $sub->is_substrate= 1;
      $sub->is_design= 1;
      $sub->save();

      // 5
      $sub = new SubProd;
      $sub->name = 'Vinyl Square Sticker';
      $sub->main_id = 2;
      $sub->description= "";
      $sub->is_substrate= 1;
      $sub->is_design= 1;
      $sub->save();

      // 6
      $sub = new SubProd;
      $sub->name = 'Vinyl Rectangler Sticker';
      $sub->main_id = 2;
      $sub->description= "";
      $sub->is_substrate= 1;
      $sub->is_design= 1;
      $sub->save();

      // 7
      $sub = new SubProd;
      $sub->name = 'Business Cards, 1-side';
      $sub->main_id = 4;
      $sub->description= "";
      $sub->is_paperType= 1;
      $sub->is_corner= 1;
      $sub->is_lam= 1;
      $sub->is_substrate= 1;
      $sub->is_design= 1;
      $sub->save();

      // 8
      $sub = new SubProd;
      $sub->name = 'Business Cards, 2-side';
      $sub->main_id = 4;
      $sub->description= "";
      $sub->is_paperType= 1;
      $sub->is_corner= 1;
      $sub->is_lam= 1;
      $sub->is_substrate= 1;
      $sub->is_design= 1;
      $sub->save();

      // 9
      $sub = new SubProd;
      $sub->name = 'Tickets, 1-side';
      $sub->main_id = 7;
      $sub->description= "";
      $sub->is_paperType= 1;
      $sub->is_per= 1;
      $sub->is_design= 1;
      $sub->save();

      // 10
      $sub = new SubProd;
      $sub->name = 'Tickets, 2-side';
      $sub->main_id = 7;
      $sub->description= "";
      $sub->is_paperType= 1;
      $sub->is_per= 1;
      $sub->is_design= 1;
      $sub->save();

      // 11
      $sub = new SubProd;
      $sub->name = 'Carbon Form';
      $sub->main_id = 11;
      $sub->description= "";
      $sub->is_paperType= 1;
      $sub->is_color= 1;
      $sub->is_colorFly= 1;
      $sub->is_design= 1;
      $sub->save();

      // 12
      $sub = new SubProd;
      $sub->name = 'Carbonless Form';
      $sub->main_id = 11;
      $sub->description= "";
      $sub->is_paperType= 1;
      $sub->is_color= 1;
      $sub->is_colorFly= 1;
      $sub->is_design= 1;
      $sub->save();

      // 13
      $sub = new SubProd;
      $sub->name = 'Wire Bound, Soft Cover';
      $sub->main_id = 12;
      $sub->description= "";
      $sub->is_paperType= 1;
      $sub->is_color= 1;
      $sub->is_design= 1;
      $sub->save();

      // 14
      $sub = new SubProd;
      $sub->name = 'Wire Bound, Hard Cover';
      $sub->main_id = 12;
      $sub->description= "";
      $sub->is_paperType= 1;
      $sub->is_color= 1;
      $sub->is_design= 1;
      $sub->save();

      // 15
      $sub = new SubProd;
      $sub->name = 'Perfect Bound, Soft Cover';
      $sub->main_id = 12;
      $sub->description= "";
      $sub->is_paperType= 1;
      $sub->is_color= 1;
      $sub->is_design= 1;
      $sub->save();

      // 16
      $sub = new SubProd;
      $sub->name = 'Perfect Bound, Hard Cover';
      $sub->main_id = 12;
      $sub->description= "";
      $sub->is_paperType= 1;
      $sub->is_color= 1;
      $sub->is_design= 1;
      $sub->save();

      // 17
      $sub = new SubProd;
      $sub->name = 'Flyers, 1-side';
      $sub->main_id = 13;
      $sub->description= "";
      $sub->is_paperType= 1;
      $sub->is_design= 1;
      $sub->save();

      // 18
      $sub = new SubProd;
      $sub->name = 'Flyers, 2-side';
      $sub->main_id = 13;
      $sub->description= "";
      $sub->is_paperType= 1;
      $sub->is_design= 1;
      $sub->save();

      // 19
      $sub = new SubProd;
      $sub->name = 'Brochures, Bi-fold';
      $sub->main_id = 13;
      $sub->description= "";
      $sub->is_paperType= 1;
      $sub->is_design= 1;
      $sub->save();

      // 20
      $sub = new SubProd;
      $sub->name = 'Brochures, Tri-fold';
      $sub->main_id = 13;
      $sub->description= "";
      $sub->is_paperType= 1;
      $sub->is_design= 1;
      $sub->save();

      // 21
      $sub = new SubProd;
      $sub->name = 'Brochures, Quad-fold';
      $sub->main_id = 13;
      $sub->description= "";
      $sub->is_paperType= 1;
      $sub->is_design= 1;
      $sub->save();
    }
}
