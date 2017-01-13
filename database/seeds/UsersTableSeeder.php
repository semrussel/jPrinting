<?php

use Illuminate\Database\Seeder;
use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = new User;
        $user->name = 'Jprint Admin';
        $user->email = 'jprint@jprint.com';
        $user->password = bcrypt('jpr!int');
        $user->type= "admin";
      	$user->save();

      	$user = new User;
        $user->name = 'Jprint User';
        $user->email = 'user@user.com';
        $user->password = bcrypt('jpr!int');
        $user->type= "client";
      	$user->save();
    }
}
