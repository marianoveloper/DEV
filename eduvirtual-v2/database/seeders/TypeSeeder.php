<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Type;

class TypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        Type::create([
            'name'=>'Tecnicatura'
        ]);
        Type::create([
            'name'=>'Licenciatura'
        ]);
        Type::create([
            'name'=>'Profesorado'
        ]);
        Type::create([
            'name'=>'Especialización'

        ]);
        Type::create([
            'name'=>'Maestría'
        ]);
        Type::create([
            'name'=>'Doctorado'
        ]);
        Type::create([
            'name'=>'Diplomatura'
        ]);
        Type::create([
            'name'=>'Actualización'
        ]);
        Type::create([
            'name'=>'Taller'
        ]);
        Type::create([
            'name'=>'Posgrado'
        ]);
        Type::create([
            'name'=>'Grado'
        ]);
        Type::create([
            'name'=>'PreGrado'
        ]);
    }
}
