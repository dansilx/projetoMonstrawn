<x-app-layout>
    <div class="container mt-5">
        <h1 class="display-4">Editar Aluno</h1>

        <form action="/alunos/{{$aluno->id}}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group mb-3">
                <label for="nome" class="form-label">Nome</label>
                <input type="text" name="nome" class="form-control" id="nome" value="{{ $aluno->nome }}" required>
            </div>
            <div class="form-group mb-3">
                <label for="email" class="form-label">E-mail</label>
                <input type="email" name="email" class="form-control" id="email" value="{{ $aluno->email }}" required>
            </div>
            <div class="form-group mb-3">
                <label for="data_nascimento" class="form-label">Data de Nascimento</label>
                <input type="date" name="data_nascimento" class="form-control" id="data_nascimento" value="{{ $aluno->data_nascimento }}" required>
            </div>
            <div class="form-group mb-3">
                <label for="endereco" class="form-label">Endereço</label>
                <input type="text" name="endereco" class="form-control" id="endereco" value="{{ $aluno->endereco }}">
            </div>
            <div class="form-group mb-3">
                <label for="telefone" class="form-label">Telefone</label>
                <input type="text" name="telefone" class="form-control" id="telefone" value="{{ $aluno->telefone }}">
            </div>
            <button type="submit" class="btn btn-success">Salvar Alterações</button>
            <a href="{{ route('alunos.index') }}" class="btn btn-secondary ml-2">Voltar para Lista de Alunos</a>
        </form>
    </div>
</x-app-layout>
