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
            'name' => 'Toto',
            'email' => 'toto@gmail.com',
            'password'=> bcrypt('toto2021')
        ]);

        $user->assignRole('Admin');
    }
}
