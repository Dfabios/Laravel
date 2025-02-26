@extends('layouts.principal')

@section('conteudo')

    <div class="d-flex justify-content-between align-items-center mb-4">
        <h1>Listagem de produtos</h1>

        <!-- Campo de Pesquisa -->
        <div>
            <input type="text" id="search" class="form-control" placeholder="Pesquisar produto...">
        </div>
    </div>

    <!-- Container para os produtos -->
    <div id="products-container">
        @if (empty($produtos))
            <div class="alert alert-danger">
                Você não tem nenhum produto cadastrado.
            </div>
        @else
            <table class="table table-striped table-bordered table-hover">
                <thead>
                    <tr>
                        <th>Nome</th>
                        <th>Valor</th>
                        <th>Descrição</th>
                        <th>Quantidade</th>
                        <th>Ações</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($produtos as $p)
                        <tr class="{{ $p->quantidade <= 1 ? 'danger' : '' }}">
                            <td>{{ $p->nome }}</td>
                            <td>{{ $p->valor }}</td>
                            <td>{{ $p->descricao }}</td>
                            <td>{{ $p->quantidade }}</td>
                            <td>
                                <a href="/produtos/mostra/{{ $p->id }}" class="btn btn-info btn-sm">
                                    <i class="bi bi-binoculars"></i>
                                </a>
                                <a href="{{ route('produtos.remove', $p->id) }}" class="btn btn-danger btn-sm">
                                    <i class="bi bi-x-circle"></i>
                                </a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        @endif
    </div>

@endsection

@section('scripts')
    <script>
      document.addEventListener('DOMContentLoaded', function () {
    const searchInput = document.getElementById('search');

    if (searchInput) {
        searchInput.addEventListener('keyup', function () {
            const query = this.value;

            fetch('/produtos/pesquisa?q=${encodeURIComponent(query)}', {
                headers: { 'X-Requested-With': 'XMLHttpRequest' }
            })
                .then(response => {
                    if (!response.ok) {
                        throw new Error(`Erro HTTP: ${response.status}`);
                    }
                    return response.text();
                })
                .then(html => {
                    document.getElementById('products-container').innerHTML = html;
                })
                .catch(error => console.error('Erro na pesquisa:', error));
        });
    } else {
        console.error('Campo de pesquisa não encontrado.');
    }
});

    </script>
@endsection
