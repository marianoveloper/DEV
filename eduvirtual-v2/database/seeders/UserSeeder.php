<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $user=  User::create([
            'name' => 'Admin',
            'email' => 'admin@gmail.com',
            'password'=> bcrypt('admin2021')
        ]);
        $user=  User::create([
            'name' => 'Marita',
            'email' => 'marita@gmail.com',
            'password'=> bcrypt('eduvirtual')
        ]);
        $user=  User::create([
            'name' => 'DEV',
            'email' => 'campusvirtual@uccuyo.edu.ar',
            'password'=> bcrypt('virtual2021')
        ]);
        $user=  User::create([
            'name' => 'toto',
            'email' => 'toto@gmail.com',
            'password'=> bcrypt('toto2021')
        ]);
        $user->assignRole('Admin');
    }
}
