@if ($produtos->isEmpty())
    <div class="alert alert-danger">
        Nenhum produto encontrado.
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
