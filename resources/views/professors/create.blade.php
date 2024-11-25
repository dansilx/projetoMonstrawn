<x-app-layout>
    <div class="container mt-5">
        <h1 class="display-4">Cadastrar Novo Professor</h1>

        <form action="/professors" method="POST">
            @csrf
            <div class="form-group mb-3">
                <label for="nome" class="form-label">Nome</label>
                <input type="text" name="nome" class="form-control" id="nome" required>
            </div>
            <div class="form-group mb-3">
                <label for="email" class="form-label">E-mail</label>
                <input type="email" name="email" class="form-control" id="email" required>
            </div>
            <div class="form-group mb-3">
                <label for="especialidade" class="form-label">Especialidade</label>
                <input type="text" name="especialidade" class="form-control" id="especialidade">
            </div>
            <div class="form-group mb-3">
                <label for="data_admissao" class="form-label">Data de Admissão</label>
                <input type="date" name="data_admissao" class="form-control" id="data_admissao" required>
            </div>
            <button type="submit" class="btn btn-outline-secondary">Cadastrar</button>
            <a href="/professors" class="btn btn-secondary">Voltar</a>
        </form>
    </div>
</x-app-layout>
