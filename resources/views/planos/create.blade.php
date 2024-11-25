<x-app-layout>
    <div class="container mt-5">
        <h1 class="display-4">Cadastrar Novo Plano</h1>

        <form action="{{ route('planos.store') }}" method="POST">
            @csrf
            <div class="form-group mb-3">
                <label for="nome">Nome</label>
                <input type="text" name="nome" id="nome" class="form-control" required>
            </div>
            <div class="form-group mb-3">
                <label for="descricao">Descrição</label>
                <textarea name="descricao" id="descricao" class="form-control"></textarea>
            </div>
            <div class="form-group mb-3">
                <label for="valor">Valor (R$)</label>
                <input type="number" step="0.01" name="valor" id="valor" class="form-control" required>
            </div>
            <div class="form-group mb-3">
                <label for="duracao">Duração (em meses)</label>
                <input type="number" name="duracao" id="duracao" class="form-control" required>
            </div>
            <button type="submit" class="btn btn-primary">Cadastrar</button>
            <a href="{{ route('planos.index') }}" class="btn btn-secondary">Voltar</a>
        </form>
    </div>
</x-app-layout>
