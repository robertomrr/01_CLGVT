<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\endereco;

class EnderecoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \App\Models\endereco::factory(10)->create([
            'rua' => 'Rua Sanches de Aguiar',
            'bairro' => 'Vila Oratório',
            'cidade' => 'São Paulo',
            'uf' => 'SP',
            'ibge' => 'X',
        ]);
    }
}
