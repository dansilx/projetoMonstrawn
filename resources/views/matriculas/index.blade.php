<x-app-layout>
    <div class="container mt-5">
        <h1 class="display-4">Matrículas</h1>

        <a href="/matriculas/create" class="btn btn-outline-secondary mb-3">Cadastrar Nova Matrícula</a>

        <table class="table">
            <thead>
                <tr>
                    <th>Aluno</th>
                    <th>Professor</th>
                    <th>Plano</th>
                    <th>Data da Matrícula</th>
                    <th>Status</th>
                    <th>Ações</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($matriculas as $matricula)
                    <tr>
                        <td>{{ $matricula->aluno->nome }}</td>
                        <td>{{ $matricula->professor->nome }}</td>
                        <td>{{ $matricula->plano->nome }}</td>
                        <td>{{ $matricula->data_matricula }}</td>
                        <td>{{ $matricula->status }}</td>
                        <td>
                            <a href="/matriculas/{{$matricula->id}}" class="btn btn-info">Ver</a>
                            <a href="{{ route('matriculas.edit', $matricula->id) }}" class="btn btn-warning">Editar</a>
                            <form action="{{ route('matriculas.destroy', $matricula->id) }}" method="POST" class="d-inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Deletar</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</x-app-layout>
