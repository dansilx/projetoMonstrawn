<x-app-layout>
    <div class="container mt-5">
        <h1 class="display-4">Editar Professor</h1>

        <form action="/professors/{{$professor->id}}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group mb-3">
                <label for="nome" class="form-label">Nome</label>
                <input type="text" name="nome" class="form-control" id="nome" value="{{ $professor->nome }}" required>
            </div>
            <div class="form-group mb-3">
                <label for="email" class="form-label">E-mail</label>
                <input type="email" name="email" class="form-control" id="email" value="{{ $professor->email }}" required>
            </div>
            <div class="form-group mb-3">
                <label for="endereco" class="form-label">Especialidade</label>
                <input type="text" name="endereco" class="form-control" id="endereco" value="{{ $professor->especialidade }}">
            </div>
            <div class="form-group mb-3">
                <label for="data_nascimento" class="form-label">Data de Admissão</label>
                <input type="date" name="data_nascimento" class="form-control" id="data_nascimento" value="{{ $professor->data_admissao }}" required>
            </div>
            <button type="submit" class="btn btn-success">Salvar Alterações</button>
            <a href="/professors/index" class="btn btn-secondary ml-2">Voltar para Lista de Professores</a>
        </form>
    </div>
</x-app-layout>
