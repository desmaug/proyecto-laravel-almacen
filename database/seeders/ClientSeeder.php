<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Client; 

class ClientSeeder extends Seeder
{

    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Client::factory()->count(10)->create();

        
    }
}

//AGREGAR MANUALMENTE USUARIOS
/*
Client::create([
    [
        'name'      => 'JOSE',
        'address'   => 'SAN PEDRO',
        'phone'     => '3166151500',
        'email'     => 'jose@example.com',
        'created_at' => now(),
        'updated_at' => now(),
    ],
    [
        'name'      => 'JUAN',
        'address'   => 'SANTA MONICA',
        'phone'     => '3178589565',
        'email'     => 'juan@example.com',
        'created_at' => now(),
        'updated_at' => now(),
    ],
    [
        'name'      => 'MANUEL',
        'address'   => 'AQUINE',
        'phone'     => '3175862635',
        'email'     => 'manuel@example.com',
        'created_at' => now(),
        'updated_at' => now(),
    ],
    [
        'name'      => 'DIANA',
        'address'   => 'SANTA BARBARA',
        'phone'     => '3185256589',
        'email'     => 'diana@example.com',
        'created_at' => now(),
        'updated_at' => now(),
    ],
    
]);*/