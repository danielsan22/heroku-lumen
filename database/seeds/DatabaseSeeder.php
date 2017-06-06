<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call('UsersTableSeeder');

      DB::table('depar')->insert([
        'Precio' => 28000.45,
        'Estado' => "Disponible"
      ]);

      DB::table('depar')->insert([
        'Precio' => 22562.51,
        'Estado' => "Rentado"
      ]);
      DB::table('depar')->insert([
        'Precio' => 22562.51,
        'Estado' => "Comprado"
      ]);
      DB::table('depar')->insert([
        'Precio' => 22562.51,
        'Estado' => "Sin construir"
      ]);
    }
}
