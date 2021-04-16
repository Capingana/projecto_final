<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class userSeed extends Seeder
{

    public function run()
    {
        User::create([
            'name' => 'Administrador',
            'status' => 'Activo',
            'email' => 'scapingana@gmail.com',
            'password' => Hash::make('capingana46')
        ]);
        User::create([
            'name' => 'Director',
            'status' => 'Inativo',
            'email' => 'director@gmail.com',
            'password' => Hash::make('director46'),

        ]);
        User::create([
            'name' => 'Usuário',
            'status' => 'Inativo',
            'email' => 'usuario@gmail.com',
            'password' => Hash::make('usuario46')
        ]);

        User::factory(99)->create();
    }
}
