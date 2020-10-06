<?php

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $people = [
            [
                'nome' => 'Samuel Felipe',
                'rg' => '999999',
                'cpf' => '99999999999',
                'nascimento' => Carbon::create(1992, 1, 13),
                'email' => 'samfelgar@gmail.com',
                'tipo' => \App\User::USER,
                'senha' => Hash::make('123456'),
            ],
            [
                'nome' => 'Daniel',
                'rg' => '999999',
                'cpf' => '99999999999',
                'nascimento' => Carbon::create(1998, 11, 9),
                'email' => 'daniel@gmail.com',
                'tipo' => \App\User::USER,
                'senha' => Hash::make('123456'),
            ],
            [
                'nome' => 'Maurício',
                'rg' => '999999',
                'cpf' => '99999999999',
                'nascimento' => Carbon::create(1998, 5, 20),
                'email' => 'mauricio@gmail.com',
                'tipo' => \App\User::USER,
                'senha' => Hash::make('123456'),
            ],
            [
                'nome' => 'Willian',
                'rg' => '999999',
                'cpf' => '99999999999',
                'nascimento' => Carbon::create(1998, 5, 20),
                'email' => 'willian@gmail.com',
                'tipo' => \App\User::USER,
                'senha' => Hash::make('123456'),
            ],
        ];
        DB::table('people')->insert($people);
    }
}
