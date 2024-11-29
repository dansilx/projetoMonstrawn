<x-app-layout>

    <h5>Excluir Aluno</h5>

    <form action="/alunos/{{ $aluno->id }}" method="POST">
        @csrf
        @method('DELETE')

        <div class="row">
            <div class="col">
                <label for="nome" class="form-label">Nome do Aluno:</label>
                <input type="text" name="nome" class="form-control"
                    value="{{ $aluno->nome }}" disabled />
            </div>
        </div>

        <div class="row mt-3">
            <div class="col">
                <label for="email" class="form-label">E-mail:</label>
                <input type="text" name="email" class="form-control"
                    value="{{ $aluno->email }}" disabled />
            </div>
        </div>

        <div class="row mt-3">
            <div class="col">
                <label for="data_nascimento" class="form-label">Data de Nascimento:</label>
                <input type="text" name="data_nascimento" class="form-control"
                    value="{{ $aluno->data_nascimento }}" disabled />
            </div>
        </div>

        <div class="row mt-3">
            <div class="col">
                <label for="endereco" class="form-label">Endereço:</label>
                <input type="text" name="endereco" class="form-control"
                    value="{{ $aluno->endereco }}" disabled />
            </div>
        </div>

        <div class="row mt-3">
            <div class="col">
                <label for="telefone" class="form-label">Telefone:</label>
                <input type="text" name="telefone" class="form-control"
                    value="{{ $aluno->telefone }}" disabled />
            </div>
        </div>

        <div class="row mt-3">
            <div class="col">
                <label for="data_matricula" class="form-label">Data da Matrícula:</label>
                <input type="text" name="data_matricula" class="form-control"
                    value="{{ $aluno->data_matricula }}" disabled />
            </div>
        </div>

        <div class="row mt-4">
            <div class="col">
                <button type="submit" class="btn btn-outline-danger">
                    Excluir
                </button>
                <a href="/alunos" class="btn btn-secondary ml-2">Voltar</a>
            </div>
        </div>
    </form>

</x-app-layout>
