<x-app-layout>
    <div class="container mt-5">
        <h1 class="display-4">Lista de Planos</h1>
        <a href="/planos/create" class="btn btn-outline-secondary mb-3">
            Cadastrar Novo Plano
        </a>

        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Nome</th>
                    <th>Valor</th>
                    <th>Duração (meses)</th>
                    <th>Ações</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($planos as $plano)
                    <tr>
                        <td>{{ $plano->nome }}</td>
                        <td>R$ {{ number_format($plano->valor, 2, ',', '.') }}</td>
                        <td>{{ $plano->duracao }}</td>
                        <td>
                            <a href="/planos.show{{$plano->id}}/show" class="btn btn-info btn-sm">Ver</a>
                            <a href="/planos.show{{$plano->id}}/edit" class="btn btn-warning btn-sm">Editar</a>
                            <form action="/planos.show{{$plano->id}}/destroy" method="POST" class="d-inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm">Excluir</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</x-app-layout>
