<?php

use Illuminate\Database\Seeder;
use \App\Materia;

class add_materia extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Materia::create
        ([
            'nombre' => 'Matematicas',
            'sigla' => 'Mat',
            'nivel'=> '0',
            'nombre' => 'Literatura',
            'sigla' => 'Lit',
            'nivel'=> '2',
            'nombre' => 'Ciencias Naturales',
            'sigla' => 'Cna',
            'nivel'=> '1',
        ]);       
    }
}
