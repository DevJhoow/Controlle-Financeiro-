<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Categoria;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $user = \App\Models\User::factory()->create([
            'name' => 'teste',
            'email' => 'teste@gmail.com',
            'password' => Hash::make('123456'), // ou bcrypt('123456')
        ]);

        \App\Models\Lancamento::factory()->count(5)->create([
            'user_id' => $user->id,
        ]);
    }
}
