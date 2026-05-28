<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $users = [
            [
                'name' => 'Jose Fernando Mollo Ampuero',
                'username' => 'Jose',
                'ci' => '13375862',
                'email' => 'jose.mollo.6253@usalesiana.edu.bo',
                'telefono' => '62537859',
                'rol' => 'admin',
                'password' => 'Jose@69722527',
            ],
            [
                'name' => 'Cristofer Ramirez Rojas',
                'username' => 'admin',
                'ci' => '64684416',
                'email' => 'Cristofer@gmail.com',
                'telefono' => '65539862',
                'rol' => 'admin',
                'password' => 'admin1234',
            ],
            [
                'name' => 'Raul Torres Mamani',
                'username' => 'tester',
                'ci' => '78668465',
                'email' => 'raul@gmail.com',
                'telefono' => '63331185',
                'rol' => 'usuario',
                'password' => 'tester1234',
            ],
            [
                'name' => 'Vladimir Flores Yujra',
                'username' => 'Joseph',
                'ci' => '16564687',
                'email' => 'Vladimir@gmail.com',
                'telefono' => '76585544',
                'rol' => 'usuario',
                'password' => 'Joseph123456',
            ],
            [
                'name' => 'Omar Quispe Mita',
                'username' => 'omarqm',
                'ci' => '46748154',
                'email' => 'omar.quispe.26@servicios.usaliesiana.edu.bo',
                'telefono' => '77224954',
                'rol' => 'usuario',
                'password' => 'Omar411*',
            ],
        ];

        foreach ($users as $user) {
            User::updateOrCreate(
                ['username' => $user['username']],
                [
                    'name' => $user['name'],
                    'ci' => $user['ci'],
                    'email' => $user['email'],
                    'telefono' => $user['telefono'],
                    'rol' => $user['rol'],
                    'password' => Hash::make($user['password']),
                ]
            );
        }
    }
}
