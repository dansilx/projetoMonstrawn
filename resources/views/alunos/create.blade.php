<x-app-layout>
    <div class="container mt-5">
        <h1 class="display-4">Cadastrar Novo Aluno</h1>

        <form action="/alunos" method="POST">
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
                <label for="data_nascimento" class="form-label">Data de Nascimento</label>
                <input type="date" name="data_nascimento" class="form-control" id="data_nascimento" required>
            </div>
            <div class="form-group mb-3">
                <label for="endereco" class="form-label">Endereço</label>
                <input type="text" name="endereco" class="form-control" id="endereco">
            </div>
            <div class="form-group mb-3">
                <label for="telefone" class="form-label">Telefone</label>
                <input type="text" name="telefone" class="form-control" id="telefone">
            </div>
            <button type="submit" class="btn btn-outline-secondary">Cadastrar</button>
            <a href="/alunos" class="btn btn-secondary">Voltar</a>
        </form>
    </div>
</x-app-layout>
