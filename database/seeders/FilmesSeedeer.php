<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FilmesSeedeer extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('filmes')->insert([
            [
                'nome' => 'kgdfvnjkdf',
                'ano' => 2208,
                'sinopse' => 'Denfn',
                'categoria' => 'JDFHVNJKD',
                'capa' => NULL,
                'link' => 'https://you.tube'
            ]
        ]);
    }
}
