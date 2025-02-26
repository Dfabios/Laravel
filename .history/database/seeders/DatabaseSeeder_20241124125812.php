<?php
use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
class DatabaseSeeder extends Seeder {




public function run()
{
Model::unguard();s database.
$this->call(’ProdutoTableSeeder’);
}oid
}
class ProdutoTableSeeder extends Seeder {
public function run()
{
DB::insert(’insert into produtosder');
(nome, quantidade, valor, descricao)
43
4.5. Inserindo dados na tabela produtos Casa do Código
values (?,?,?,?)’,
array(’Geladeira’, 2, 5900.00,ends Seeder {
’Side by Side com gelo na porta’));
DB::insert(’insert into produtos
(nome, quantidade, valor, descricao)produtos
values (?,?,?,?)’,, descricao)
array(’Fogão’, 5, 950.00,
’Painel automático e forno elétrico’));
DB::insert(’insert into produtos
(nome, quantidade, valor, descricao)
values (?,?,?,?)’,
array(’Microondas’, 1, 1520.00,
’Manda SMS quando termina de esquentar’));
}
}