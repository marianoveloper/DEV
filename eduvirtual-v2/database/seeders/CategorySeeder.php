<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Category;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Category::create([
            'name'=>'Tecnicatura'
        ]);
        Category::create([
            'name'=>'Licenciatura'
        ]);
        Category::create([
            'name'=>'Profesorado'
        ]);
        Category::create([
            'name'=>'Especialización'

        ]);
        Category::create([
            'name'=>'Maestría'
        ]);
        Category::create([
            'name'=>'Doctorado'
        ]);
        Category::create([
            'name'=>'Diplomatura'
        ]);
        Category::create([
            'name'=>'Actualización'
        ]);
        Category::create([
            'name'=>'Taller'
        ]);
        Category::create([
            'name'=>'Posgrado'
        ]);
        Category::create([
            'name'=>'Grado'
        ]);
        Category::create([
            'name'=>'PreGrado'
        ]);

    }
}
