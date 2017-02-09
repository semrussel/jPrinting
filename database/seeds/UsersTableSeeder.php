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
        $user->firstName = 'Jprint';
        $user->lastName = 'Admin';
        $user->email = 'jprint@jprint.com';
        $user->password = bcrypt('jpr!int');
        $user->type= "admin";
        $user->cpNum= "639472055426";
      	$user->save();

      	$user = new User;
        $user->firstName = 'Jprint';
        $user->lastName = 'User';
        $user->email = 'user@user.com';
        $user->password = bcrypt('jpr!int');
        $user->type= "client";
        $user->cpNum= "639472055426";
      	$user->save();
    }
}
