<x-app-layout>
    <div class="container mt-5">
        <h1 class="display-4">Detalhes da Matrícula</h1>

        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Aluno: {{ $matricula->aluno->nome }}</h5>
                <p class="card-text"><strong>Professor:</strong> {{ $matricula->professor->nome }}</p>
                <p class="card-text"><strong>Plano:</strong> {{ $matricula->plano->nome }}</p>
                <p class="card-text"><strong>Data da Matrícula:</strong> {{ $matricula->data_matricula }}</p>
                <p class="card-text"><strong>Status:</strong> {{ ucfirst($matricula->status) }}</p>
                <a href="{{ route('matriculas.index') }}" class="btn btn-secondary">Voltar</a>
                <a href="{{ route('matriculas.edit', $matricula->id) }}" class="btn btn-warning">Editar</a>
            </div>
        </div>
    </div>
</x-app-layout>
