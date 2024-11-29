<x-app-layout>
    <div class="container mt-5">
        <h1 class="display-4">Lista de Professores</h1>

        <!-- Botão para adicionar novo professor -->
        <a href="/professors/create" class="btn btn-outline-secondary mb-3">
            Cadastrar Novo Professor
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
                @foreach ($professors as $professor)
                    <tr>
                        <td>{{ $professor->id }}</td>
                        <td>{{ $professor->nome }}</td>
                        <td>{{ $professor->email }}</td>
                        <td>
                            <!-- Botão de detalhes -->
                            <a href="/professors/{{$professor->id}}" class="btn btn-outline-info btn-sm">Ver</a>
                            <!-- Botão de edição -->
                            <a href="/professors/{{$professor->id}}/edit" class="btn btn-outline-warning btn-sm">Editar</a>
                            <!-- Formulário de exclusão -->
                            {{-- <form action="{{ route('professors.destroy', $professor->id) }}" method="POST" class="d-inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm">Excluir</button>
                            </form> --}}
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</x-app-layout>
