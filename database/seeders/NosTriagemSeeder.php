<?php

namespace Database\Seeders;

use App\Models\NoTriagem;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class NosTriagemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //

         NoTriagem::create([
            'id' => 1,
            'pergunta' => 'Febre alta?',
            'sim' => 2,
            'nao' => 3,
            'departamento_id' => null,
        ]);

        NoTriagem::create([
            'id' => 2,
            'pergunta' => 'Dificuldade respiratória?',
            'sim' => null,
            'nao' => null,
            'departamento_id' => 1, // Emergência
        ]);

        NoTriagem::create([
            'id' => 3,
            'pergunta' => 'Criança?',
            'sim' => null,
            'nao' => null,
            'departamento_id' => 3, // Pediatria
        ]);
    }
}
