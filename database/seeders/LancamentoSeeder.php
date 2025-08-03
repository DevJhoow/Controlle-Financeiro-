<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class LancamentoSeeder extends Seeder
{
    public function run(): void
    {
        \App\Models\User::factory()
        ->count(5)
        ->hasLancamentos(10)
        ->create();
    }
}
