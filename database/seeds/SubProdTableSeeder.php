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
      // Calendar Sub 1
      $sub = new SubProd;
      $sub->name = 'Poster Calendar';
      $sub->main_id = 1;
      $sub->description= "";
      $sub->is_lam= 1;
      $sub->save();

      //Calendar Sub2
      $sub = new SubProd;
      $sub->name = 'Monthly Wall Calendar';
      $sub->main_id = 1;
      $sub->description= "";
      $sub->is_lam= 1;
      $sub->save();

      // Calendar Sub 3
      $sub = new SubProd;
      $sub->name = 'Table Tent Calendar';
      $sub->main_id = 1;
      $sub->description= "";
      $sub->is_lam= 1;
      $sub->save();

      // Stickers and Labels Sub1
      $sub = new SubProd;
      $sub->name = 'Vinyl Round Sticker';
      $sub->main_id = 2;
      $sub->description= "";
      $sub->is_substrate= 1;
      $sub->save();

      // Stickers and Labels Sub2
      $sub = new SubProd;
      $sub->name = 'Vinyl Square Sticker';
      $sub->main_id = 2;
      $sub->description= "";
      $sub->is_substrate= 1;
      $sub->save();

      // Stickers and Labels Sub3
      $sub = new SubProd;
      $sub->name = 'Vinyl Rectangler Sticker';
      $sub->main_id = 2;
      $sub->description= "";
      $sub->is_substrate= 1;
      $sub->save();

      // Business Cards Sub1
      $sub = new SubProd;
      $sub->name = 'Business Cards, 1-side';
      $sub->main_id = 4;
      $sub->description= "";
      $sub->is_paperType= 1;
      $sub->is_corner= 1;
      $sub->is_lam= 1;
      $sub->is_substrate= 1;
      $sub->save();

      // Business Cards Sub2
      $sub = new SubProd;
      $sub->name = 'Business Cards, 2-side';
      $sub->main_id = 4;
      $sub->description= "";
      $sub->is_paperType= 1;
      $sub->is_corner= 1;
      $sub->is_lam= 1;
      $sub->is_substrate= 1;
      $sub->save();

      // Tickers Sub1
      $sub = new SubProd;
      $sub->name = 'Tickets, 1-side';
      $sub->main_id = 7;
      $sub->description= "";
      $sub->is_paperType= 1;
      $sub->is_per= 1;
      $sub->save();

      // Tickers Sub2
      $sub = new SubProd;
      $sub->name = 'Tickets, 1-side';
      $sub->main_id = 7;
      $sub->description= "";
      $sub->is_paperType= 1;
      $sub->is_per= 1;
      $sub->save();

      // Receipts Sub1
      $sub = new SubProd;
      $sub->name = 'Carbon Form';
      $sub->main_id = 11;
      $sub->description= "";
      $sub->is_paperType= 1;
      $sub->is_color= 1;
      $sub->is_colorFly= 1;
      $sub->save();

      // Receipts Sub2
      $sub = new SubProd;
      $sub->name = 'Carbonless Form';
      $sub->main_id = 11;
      $sub->description= "";
      $sub->is_paperType= 1;
      $sub->is_color= 1;
      $sub->is_colorFly= 1;
      $sub->save();

      // Notebooks Sub1
      $sub = new SubProd;
      $sub->name = 'Wire Bound, Soft Cover';
      $sub->main_id = 12;
      $sub->description= "";
      $sub->is_paperType= 1;
      $sub->is_color= 1;
      $sub->save();

      // Notebooks Sub2
      $sub = new SubProd;
      $sub->name = 'Wire Bound, Hard Cover';
      $sub->main_id = 12;
      $sub->description= "";
      $sub->is_paperType= 1;
      $sub->is_color= 1;
      $sub->save();

      // Notebooks Sub3
      $sub = new SubProd;
      $sub->name = 'Perfect Bound, Soft Cover';
      $sub->main_id = 12;
      $sub->description= "";
      $sub->is_paperType= 1;
      $sub->is_color= 1;
      $sub->save();

      // Notebooks Sub4
      $sub = new SubProd;
      $sub->name = 'Perfect Bound, Hard Cover';
      $sub->main_id = 12;
      $sub->description= "";
      $sub->is_paperType= 1;
      $sub->is_color= 1;
      $sub->save();

      // Flyers and Brochures Sub1
      $sub = new SubProd;
      $sub->name = 'Flyers, 1-side';
      $sub->main_id = 13;
      $sub->description= "";
      $sub->is_paperType= 1;
      $sub->save();

      // Flyers and Brochures Sub2
      $sub = new SubProd;
      $sub->name = 'Flyers, 2-side';
      $sub->main_id = 13;
      $sub->description= "";
      $sub->is_paperType= 1;
      $sub->save();

      // Flyers and Brochures Sub3
      $sub = new SubProd;
      $sub->name = 'Brochures, Bi-fold';
      $sub->main_id = 13;
      $sub->description= "";
      $sub->is_paperType= 1;
      $sub->save();

      // Flyers and Brochures Sub3
      $sub = new SubProd;
      $sub->name = 'Brochures, Tri-fold';
      $sub->main_id = 13;
      $sub->description= "";
      $sub->is_paperType= 1;
      $sub->save();

      // Flyers and Brochures Sub3
      $sub = new SubProd;
      $sub->name = 'Brochures, Quad-fold';
      $sub->main_id = 13;
      $sub->description= "";
      $sub->is_paperType= 1;
      $sub->save();
    }
}
