<x-app-layout>
    <div class="container mt-5">
        <h1 class="display-4">Editar Matrícula</h1>

        <form action="{{ route('matriculas.update', $matricula->id) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="form-group mb-3">
                <label for="aluno_id">Aluno</label>
                <select name="aluno_id" id="aluno_id" class="form-control" required>
                    @foreach ($alunos as $aluno)
                        <option value="{{ $aluno->id }}" {{ $aluno->id == $matricula->aluno_id ? 'selected' : '' }}>
                            {{ $aluno->nome }}
                        </option>
                    @endforeach
                </select>
            </div>

            <div class="form-group mb-3">
                <label for="professor_id">Professor</label>
                <select name="professor_id" id="professor_id" class="form-control" required>
                    @foreach ($professores as $professor)
                        <option value="{{ $professor->id }}" {{ $professor->id == $matricula->professor_id ? 'selected' : '' }}>
                            {{ $professor->nome }}
                        </option>
                    @endforeach
                </select>
            </div>

            <div class="form-group mb-3">
                <label for="plano_id">Plano</label>
                <select name="plano_id" id="plano_id" class="form-control" required>
                    @foreach ($planos as $plano)
                        <option value="{{ $plano->id }}" {{ $plano->id == $matricula->plano_id ? 'selected' : '' }}>
                            {{ $plano->nome }}
                        </option>
                    @endforeach
                </select>
            </div>

            <div class="form-group mb-3">
                <label for="data_matricula">Data da Matrícula</label>
                <input type="date" name="data_matricula" id="data_matricula" class="form-control" value="{{ $matricula->data_matricula }}" required>
            </div>

            <div class="form-group mb-3">
                <label for="status">Status</label>
                <select name="status" id="status" class="form-control">
                    <option value="ativa" {{ $matricula->status == 'ativa' ? 'selected' : '' }}>Ativa</option>
                    <option value="cancelada" {{ $matricula->status == 'cancelada' ? 'selected' : '' }}>Cancelada</option>
                    <option value="concluida" {{ $matricula->status == 'concluida' ? 'selected' : '' }}>Concluída</option>
                </select>
            </div>

            <button type="submit" class="btn btn-primary">Atualizar Matrícula</button>
            <a href="{{ route('matriculas.index') }}" class="btn btn-secondary">Cancelar</a>
        </form>
    </div>
</x-app-layout>
