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
      //1
      $main = new MainProd;
      $main->name = 'Calendar';
      $main->is_subcat = 1;
      $main->description = 'NONE';
      $main->logo = 'img/serv-01.jpg';
      $main->is_lam= 1;
      $main->save();

      //2
      $main = new MainProd;
      $main->name = 'Sticker & Labels';
      $main->is_subcat = 1;
      $main->description= "";
      $main->logo = 'img/serv-02.jpg';
      $main->is_paperType= 0;
      $main->is_corner= 0;
      $main->is_lam= 0;
      $main->is_substrate= 1;
      $main->is_per= 0;
      $main->is_color= 0;
      $main->is_colorFly= 0;
      $main->save();

      //3
      $main = new MainProd;
      $main->name = 'Invitations';
      $main->is_subcat = 0;
      $main->description= "";
      $main->logo = 'img/serv-03.jpg';
      $main->is_paperType= 1;
      $main->save();

      //4
      $main = new MainProd;
      $main->name = 'Business Cards';
      $main->is_subcat = 1;
      $main->description= "";
      $main->logo = 'img/serv-07.jpg';
      $main->is_paperType= 1;
      $main->is_corner= 1;
      $main->is_lam= 1;
      $main->is_substrate= 0;
      $main->is_per= 0;
      $main->is_color= 0;
      $main->is_colorFly= 0;
      $main->save();

      //5
      $main = new MainProd;
      $main->name = 'Souvenir Program';
      $main->is_subcat = 0;
      $main->description= "";
      $main->logo = 'img/serv-09.jpg';
      $main->is_paperType= 1;
      $main->is_corner= 0;
      $main->is_lam= 0;
      $main->is_substrate= 0;
      $main->is_per= 0;
      $main->is_color= 0;
      $main->is_colorFly= 0;
      $main->save();

      //6
      $main = new MainProd;
      $main->name = 'Paper bags';
      $main->is_subcat = 0;
      $main->description= "";
      $main->logo = 'img/serv-02.jpg';
      $main->save();

      //7
      $main = new MainProd;
      $main->name = 'Tickets';
      $main->is_subcat = 1;
      $main->description= "";
      $main->logo = 'img/serv-13.jpg';
      $main->is_paperType= 1;
      $main->is_per= 1;
      $main->save();

      //8
      $main = new MainProd;
      $main->name = 'Posters';
      $main->is_subcat = 0;
      $main->description= "";
      $main->logo = 'img/serv-02.jpg';
      $main->is_paperType= 1;
      $main->is_lam= 1;
      $main->save();

      //9
      $main = new MainProd;
      $main->name = 'Office Forms';
      $main->is_subcat = 0;
      $main->description= "";
      $main->logo = 'img/serv-15.jpg';
      $main->is_paperType= 1;
      $main->save();

      //10
      $main = new MainProd;
      $main->name = 'Certificates';
      $main->is_subcat = 0;
      $main->description= "";
      $main->logo = 'img/serv-16.jpg';
      $main->is_paperType= 1;
      $main->save();

      //11
      $main = new MainProd;
      $main->name = 'Receipts';
      $main->is_subcat = 1;
      $main->description= "";
      $main->logo = 'img/serv-18.jpg';
      $main->is_paperType= 1;
      $main->is_color= 1;
      $main->is_colorFly= 1;
      $main->save();

      //12
      $main = new MainProd;
      $main->name = 'Notebooks';
      $main->is_subcat = 1;
      $main->description= "";
      $main->logo = 'img/serv-19.jpg';
      $main->is_paperType= 1;
      $main->is_color= 1;
      $main->save();

      //13
      $main = new MainProd;
      $main->name = 'Flyers/ Brochures';
      $main->is_subcat = 1;
      $main->description= "";
      $main->logo = 'img/serv-20.jpg';
      $main->is_paperType= 1;
      $main->save();

    }
}
