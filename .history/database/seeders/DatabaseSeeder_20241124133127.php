<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        Model::unguard();

        $this->call(ProdutoTableSeeder::class);
    }
}

class ProdutoTableSeeder extends Seeder
{
    public function run()
    {
        DB::insert(
            'insert into produtos (nome, quantidade, valor, descricao) values (?, ?, ?, ?)',
            ['Geladeira', 2, 5900.00, 'Side by Side com gelo na porta']
        );

        DB::insert(
            'insert into produtos (nome, quantidade, valor, descricao) values (?, ?, ?, ?)',
            ['Fogão', 5, 950.00, 'Painel automático e forno elétrico']
        );

        DB::insert(
            'insert into produtos (nome, quantidade, valor, descricao) values (?, ?, ?, ?)',
            ['Microondas', 1, 1520.00, 'Manda SMS quando termina de esquentar']
        );
    }
}
