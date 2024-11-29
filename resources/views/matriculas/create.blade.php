<x-app-layout>
    <div class="container mt-5">
        <h1 class="display-4">Nova Matrícula</h1>

        <form action="/matriculas" method="POST">
            @csrf

            <div class="form-group mb-3">
                <label for="aluno_id">Aluno</label>
                <select name="aluno_id" id="aluno_id" class="form-control" required>
                    @foreach ($alunos as $aluno)
                        <option value="{{ $aluno->id }}">{{ $aluno->nome }}</option>
                    @endforeach
                </select>
            </div>

            <div class="form-group mb-3">
                <label for="professor_id">Professor</label>
                <select name="professor_id" id="professor_id" class="form-control" required>
                    @foreach ($professors as $professor)
                        <option value="{{ $professor->id }}">{{ $professor->nome }}</option>
                    @endforeach
                </select>
            </div>

            <div class="form-group mb-3">
                <label for="plano_id">Plano</label>
                <select name="plano_id" id="plano_id" class="form-control" required>
                    @foreach ($planos as $plano)
                        <option value="{{ $plano->id }}">{{ $plano->nome }}</option>
                    @endforeach
                </select>
            </div>

            <div class="form-group mb-3">
                <label for="data_matricula">Data da Matrícula</label>
                <input type="date" name="data_matricula" id="data_matricula" class="form-control" required>
            </div>

            <button type="submit" class="btn btn-outline-secondary">Cadastrar</button>
            <a href="/matriculas" class="btn btn-secondary">Voltar</a>
        </form>
    </div>
</x-app-layout>
