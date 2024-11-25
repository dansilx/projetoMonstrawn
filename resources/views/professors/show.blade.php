<x-app-layout>
    <div class="container mt-5">
        <h1 class="display-4">Detalhes do Professor</h1>

        <div class="card mb-4">
            <div class="card-body">
                <h5 class="card-title"><strong>Nome:</strong> {{ $professor->nome }}</h5>
                <p class="card-text"><strong>E-mail:</strong> {{ $professor->email }}</p>
                <p class="card-text"><strong>Especialidade:</strong> {{ $professor->especialidade }}</p>
                <p class="card-text"><strong>Data de Admissão:</strong> {{ $professor->data_admissao }}</p>
            </div>
        </div>

        <!-- Botões de ações -->
        <a href="/alunos/index" class="btn btn-outline-dark">Voltar para Lista de Professores</a>
        <a href="/alunos/edit" class="btn btn-warning ml-2">Editar Professores</a>
        <form action="/alunos/{{$aluno->id}}/destroy" method="POST" class="d-inline ml-2">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger">Deletar Professor</button>
        </form>
    </div>
</x-app-layout>
