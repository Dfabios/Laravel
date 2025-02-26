<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Produto extends Model
{
    Schema::create('produtos', function(Blueprint $table)
    {
    $table->increments('id');
    $table->string('nome');
    $table->decimal('valor', 5, 2);
    $table->string('descricao');
    $table->integer('quantidade');
    $table->timestamps();
    });
    public function down()
{
Schema::drop('produtos');
}
}

