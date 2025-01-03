<x-app-layout>
    <div class="container mt-5">
        <h1 class="display-4">Detalhes do Plano</h1>

        <div class="card mt-3">
            <div class="card-header">
                <h3>{{ $plano->nome }}</h3>
            </div>
            <div class="card-body">
                <p><strong>Descrição:</strong> {{ $plano->descricao ?? 'Sem descrição' }}</p>
                <p><strong>Valor:</strong> R$ {{ number_format($plano->valor, 2, ',', '.') }}</p>
                <p><strong>Duração:</strong> {{ $plano->duracao }} meses</p>
            </div>
        </div>

        <div class="mt-3">
            {{-- <a href="/planos/{{$plano->id}}/edit" class="btn btn-outline-warning">Editar</a> --}}
            <form action="/planos/{{ $plano->id }}" method="POST" class="d-inline">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-outline-danger">Excluir</button>
            </form>
            <a href="/planos" class="btn btn-secondary">Voltar</a>
        </div>
    </div>
</x-app-layout>
