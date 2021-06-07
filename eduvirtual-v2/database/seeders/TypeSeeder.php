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

            'name'=>'Carrera',
        ]);
        Type::create([

            'name'=>'Diplomatura',
        ]);
        Type::create([

            'name'=>'Curso',
        ]);
    }
}
