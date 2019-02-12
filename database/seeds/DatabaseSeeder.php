<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
	public function run()
    {
      DB::table('ciclos')->insert([
        'id' => '1',
        'cod' => 'DAW',
        'nombre' => 'Desarrollo de aplicaciones web',
      ]);

      DB::table('ciclos')->insert([
        'id' => '2',
        'cod' => 'DAM',
        'nombre' => 'Desarrollo de aplicaciones multiplataforma',
      ]);

      DB::table('ciclos')->insert([
        'id' => '3',
        'cod' => 'ASIR',
        'nombre' => 'Administración de sistemas informaticos en red',
      ]);

      DB::table('ciclos')->insert([
        'id' => '4',
        'cod' => 'SMR',
        'nombre' => 'Sistemas microinformaticos y redes',
      ]);

    }
}
