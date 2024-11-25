<x-app-layout>
    <div class="container mt-5">
        <h1 class="display-4">Lista de Alunos</h1>

        <!-- Botão para adicionar novo aluno -->
        <a href="/alunos/create" class="btn btn-outline-secondary mb-3">
            Cadastrar Novo Aluno
        </a>

        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <table class="table table-striped">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nome</th>
                    <th>Email</th>
                    <th>Ações</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($alunos as $aluno)
                    <tr>
                        <td>{{ $aluno->id }}</td>
                        <td>{{ $aluno->nome }}</td>
                        <td>{{ $aluno->email }}</td>
                        <td>
                            <!-- Botão de detalhes -->
                            <a href="/alunos/{{$aluno->id}}/show" class="btn btn-info btn-sm">Ver</a>
                            <!-- Botão de edição -->
                            <a href="/alunos/{{$aluno->id}}/edit" class="btn btn-warning btn-sm">Editar</a>
                            <!-- Formulário de exclusão -->
                            <form action="/alunos/{{$aluno->id}}/destroy" method="POST" class="d-inline">
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
