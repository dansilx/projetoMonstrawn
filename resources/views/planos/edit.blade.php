<x-app-layout>
    <div class="container mt-5">
        <h1 class="display-4">Editar Plano</h1>

        <form action="{{ route('planos.update', $plano->id) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="form-group mb-3">
                <label for="nome">Nome</label>
                <input type="text" name="nome" id="nome" class="form-control" value="{{ old('nome', $plano->nome) }}" required>
            </div>
            <div class="form-group mb-3">
                <label for="descricao">Descrição</label>
                <textarea name="descricao" id="descricao" class="form-control">{{ old('descricao', $plano->descricao) }}</textarea>
            </div>
            <div class="form-group mb-3">
                <label for="valor">Valor (R$)</label>
                <input type="number" step="0.01" name="valor" id="valor" class="form-control" value="{{ old('valor', $plano->valor) }}" required>
            </div>
            <div class="form-group mb-3">
                <label for="duracao">Duração (em meses)</label>
                <input type="number" name="duracao" id="duracao" class="form-control" value="{{ old('duracao', $plano->duracao) }}" required>
            </div>

            <button type="submit" class="btn btn-outline-secondary">Atualizar</button>
            <a href="{{ route('planos.index') }}" class="btn btn-secondary">Voltar</a>
        </form>
    </div>
</x-app-layout>
