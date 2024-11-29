<x-app-layout>
    <div class="container mt-5">
        <h1 class="display-4">Excluir Professor</h1>

        <form action="/professors/{{$professor->id}}" method="POST">
            @csrf
            @method('DELETE')

            <div class="row">
                <div class="col">
                    <label for="nome" class="form-label">Nome do Professor:</label>
                    <input type="text" name="nome" class="form-control"
                        value="{{ $professor->nome }}" disabled />
                </div>
            </div>

            <div class="row mt-3">
                <div class="col">
                    <label for="email" class="form-label">E-mail:</label>
                    <input type="text" name="email" class="form-control"
                        value="{{ $professor->email }}" disabled />
                </div>
            </div>

            <div class="row mt-3">
                <div class="col">
                    <label for="especialidade" class="form-label">Especialidade:</label>
                    <input type="text" name="especialidade" class="form-control"
                        value="{{ $professor->especialidade }}" disabled />
                </div>
            </div>

            <div class="row mt-3">
                <div class="col">
                    <label for="data_admissao" class="form-label">Data de Admissão:</label>
                    <input type="text" name="data_admissao" class="form-control"
                        value="{{ $professor->data_admissao }}" disabled />
                </div>
            </div>

            <div class="row mt-4">
                <div class="col">
                    <button type="submit" class="btn btn-outline-danger">
                        Excluir
                    </button>
                    <a href="/professors" class="btn btn-secondary ml-2">Voltar</a>
                </div>
            </div>
        </form>
    </div>
</x-app-layout>
