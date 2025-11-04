<?php

namespace Database\Seeders;

use App\Models\NoTriagem;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UpdateNoTriagemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        NoTriagem::insert([


            [
                'id' => 4,
                'pergunta' => 'Criança?',
                'sim' => 3, // se for criança, vai para pediatria
                'nao' => 5, // senão vai para consulta geral
                'departamento_id' => null,
            ],
            [
                'id' => 5,
                'pergunta' => 'Caso leve ou geral?',
                'sim' => null,
                'nao' => null,
                'departamento_id' => 2, // Clínica Geral
            ],
        ]);
    }
}
