<?php

namespace Database\Seeders;

use App\Models\Departamento;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DepartamentosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //

        $departamentos = [
            ['nome' => 'Emergência', 'descricao' => 'Casos críticos'],
            ['nome' => 'Clínica Geral', 'descricao' => 'Casos leves'],
            ['nome' => 'Pediatria', 'descricao' => 'Crianças'],
            ['nome' => 'Cardiologia', 'descricao' => 'Problemas cardíacos'],
        ];

        foreach ($departamentos as $d) {
            Departamento::create($d);
        }
    }
}
