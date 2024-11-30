<x-app-layout>

    <h5>Excluir Matrícula</h5>

    <form action="/matriculas/{{ $matricula->id }}" method="POST">
        @csrf
        @method('DELETE')
        <!-- Utilizando o método GET, pois estamos apenas exibindo os detalhes -->

        <div class="row">
            <div class="col">
                <label for="aluno_id" class="form-label">Aluno:</label>
                <input type="text" name="aluno_id" class="form-control"
                    value="{{ $matricula->aluno->nome }}" disabled />
            </div>
        </div>

        <div class="row mt-3">
            <div class="col">
                <label for="professor_id" class="form-label">Professor:</label>
                <input type="text" name="professor_id" class="form-control"
                    value="{{ $matricula->professor->nome }}" disabled />
            </div>
        </div>

        <div class="row mt-3">
            <div class="col">
                <label for="plano_id" class="form-label">Plano:</label>
                <input type="text" name="plano_id" class="form-control"
                    value="{{ $matricula->plano->nome }}" disabled />
            </div>
        </div>

        <div class="row mt-3">
            <div class="col">
                <label for="data_matricula" class="form-label">Data da Matrícula:</label>
                <input type="text" name="data_matricula" class="form-control"
                    value="{{ $matricula->data_matricula }}" disabled />
            </div>
        </div>

        <div class="row mt-3">
            <div class="col">
                <label for="status" class="form-label">Status:</label>
                <input type="text" name="status" class="form-control"
                    value="{{ ucfirst($matricula->status) }}" disabled />
            </div>
        </div>

        <div class="row mt-4">
            <div class="col">
                <button type="submit" class="btn btn-outline-danger">
                    Excluir
                </button>
                <a href="/matriculas" class="btn btn-secondary ml-2">Voltar</a>
            </div>
        </div>
    </form>

</x-app-layout>

