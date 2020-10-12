<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            ['nome' => 'Pintura',],
            ['nome' => 'Gesso',],
            ['nome' => 'Alvenaria',],
            ['nome' => 'Marcenaria',],
            ['nome' => 'Elétrica',],
            ['nome' => 'Hidráulica',],
            ['nome' => 'Porcelanado',],
            ['nome' => 'Antenista',],
            ['nome' => 'Serralheria',],
            ['nome' => 'Chaveiro',],
            ['nome' => 'Dedetização',],
            ['nome' => 'Fossa',],
            ['nome' => 'Impermeabilizador',],
            ['nome' => 'Paisagista',],
            ['nome' => 'Segurança Eletrônica',],
            ['nome' => 'Tapeçaria',],
            ['nome' => 'Vidraçaria',],
            ['nome' => 'Outros',],
        ];
        DB::table('categories')->insert($data);
    }
}
