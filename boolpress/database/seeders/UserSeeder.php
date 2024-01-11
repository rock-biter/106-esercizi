<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Faker\Generator as Faker;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        User::create([
            'name' => 'Gianluca Lomarco',
            'email' => 'ciao@gmail.com',
            'password' => Hash::make('ciaomamma'),
        ]);

        for ($i = 0; $i < 20; $i++) {
            # code...
            User::create([
                'name' => $faker->name(),
                'email' => $faker->email(),
                'password' => Hash::make($faker->word()),
            ]);
        }

        // faker generare 500 utenti finti
    }
}
