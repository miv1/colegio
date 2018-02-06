<?php

use Illuminate\Database\Seeder;

class query_alumno extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $alumno = DB::table('alumnos')-> select ('id')->take(1)->get(); 
         //$alumno = DB::table('alumnos')-> select ('id')->first(); //lo mismo que arriba 
        //$alumno = DB::table('alumnos')-> select ('id, nombres')->where ('id',1); // 
        //$alumno = DB::table('alumnos')->where ('id',1)->first(); //Todo 
        $alumnoId = DB::table('alumnos')-> where ('id',1)->value('id');//mas simple, solo obtener el id
        dd($alumno);// Ver el resultado en consola
    }
}
