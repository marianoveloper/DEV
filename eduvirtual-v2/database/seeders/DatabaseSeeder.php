<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\Storage;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        Storage::deleteDirectory('cursos');
        Storage::makeDirectory('cursos');

        $this->call(PermissionSeeder::class);//llama al seeder generado
        $this->call(RoleSeeder::class);
        $this->call(UserSeeder::class);
        $this->call(TypeSeeder::class);
        $this->call(CategorySeeder::class);
        $this->call(PaymentSeeder::class);
        $this->call(SedeSeeder::class);       
        $this->call(CourseSeeder::class);
    }
}
