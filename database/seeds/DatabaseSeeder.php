<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;


class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

      $u = new App\User();
      $u->email = "maxime.bauer.mb@gmail.com";
      $u->name= " Maxime Bauer";
      $u->password = app('hash')->make('toshop');
      $u->save();

      Model::unguard();
      // Register the user seeder
      $this->call(UsersTableSeeder::class);
      Model::reguard();
    }
}
