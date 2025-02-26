@extends('layouts.principal')
@section('conteudo')
    <h1>Novo produto</h1>
    <form action="{{ route('produtos.adiciona') }}" method="POST">
        @csrf
        <div class="form-group">
            <label>Nome</label>
            <input name="nome" class="form-control" />
        </div>
        <div class="form-group">
            <label>Descricao</label>
            <input name="descricao" class="form-control" />
        </div>
        <div class="form-group">
            <label>Valor</label>
            <input name="valor" class="form-control" />
        </div>
        <div class="form-group">
            <label>Quantidade</label>
            <input type="number" name="quantidade" class="form-control" />
        </div>
        <button type="submit" class="btn btn-primary btn-block"><i class="bi bi-floppy"></i> Salvar</button>
    </form>
@stop
