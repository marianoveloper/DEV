<?php

namespace Database\Seeders;

use App\Models\Type;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;

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
            'name'=>'Tecnicatura',
            'slug'=>Str::slug('Tecnicatura')
        ]);
        Type::create([
            'name'=>'Licenciatura',
            'slug'=>Str::slug('Licenciatura')
        ]);
        Type::create([
            'name'=>'Profesorado',
            'slug'=>Str::slug('Profesorado')
        ]);
        Type::create([
            'name'=>'Especialización',
            'slug'=>Str::slug('Especialización')
        ]);
        Type::create([
            'name'=>'Maestría',
            'slug'=>Str::slug('Maestría')
        ]);
        Type::create([
            'name'=>'Doctorado',
            'slug'=>Str::slug('Licenciatura')
        ]);
        Type::create([
            'name'=>'Diplomatura',
            'slug'=>Str::slug('Diplomatura')
        ]);
        Type::create([
            'name'=>'Actualización',
            'slug'=>Str::slug('Actualización')
        ]);
        Type::create([
            'name'=>'Taller',
            'slug'=>Str::slug('Taller')
        ]);

    }
}
