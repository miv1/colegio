<?php

use Illuminate\Database\Seeder;
use \App\Alumno;

class add_alumnos extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Alumno::create([
        'id'=> 2,
        'nombres' => 'juan',
        'apellido_paterno' => 'perez',
        'apellido_materno' => 'lopez', 
        'ci' => 12345]);   

      // DB::table('alumnos')->insert
      // (['id'=> 1,
      // 'nombres' => 'juan',
      // 'apellido_paterno' => 'perez',
       //'apellido_materno' => 'lopez', 
      // 'ci' => 12345,
      // ]);
    }
}
