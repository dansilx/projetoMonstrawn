<x-app-layout>
    <div class="container mt-5">
        <h1 class="display-4">Detalhes do Aluno</h1>

        <div class="card mb-4">
            <div class="card-body">
                <h5 class="card-title"><strong>Nome:</strong> {{ $aluno->nome }}</h5>
                <p class="card-text"><strong>E-mail:</strong> {{ $aluno->email }}</p>
                <p class="card-text"><strong>Data de Nascimento:</strong> {{ $aluno->data_nascimento }}</p>
                <p class="card-text"><strong>Endereço:</strong> {{ $aluno->endereco }}</p>
                <p class="card-text"><strong>Telefone:</strong> {{ $aluno->telefone }}</p>
            </div>
        </div>

        <!-- Botões de ações -->
        <a href="{{ route('alunos.index') }}" class="btn btn-outline-dark">Voltar para Lista de Alunos</a>
        <a href="{{ route('alunos.edit', $aluno->id) }}" class="btn btn-warning ml-2">Editar Aluno</a>
        <form action="{{ route('alunos.destroy', $aluno->id) }}" method="POST" class="d-inline ml-2">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger">Deletar Aluno</button>
        </form>
    </div>
</x-app-layout>
