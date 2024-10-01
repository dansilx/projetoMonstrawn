<x-app-layout>
    <div class="container mx-auto p-6 bg-white shadow rounded-lg">
        <h1 class="text-2xl font-bold mb-4">Detalhes do Aluno</h1>

        <div class="mb-4">
            <strong>Nome:</strong> {{ $aluno->nome }}
        </div>
        <div class="mb-4">
            <strong>E-mail:</strong> {{ $aluno->email }}
        </div>
        <div class="mb-4">
            <strong>Idade:</strong> {{ $aluno->idade }}
        </div>
        <div class="mb-4">
            <strong>Endereço:</strong> {{ $aluno->endereco }}
        </div>
        <div class="mb-4">
            <strong>Telefone:</strong> {{ $aluno->telefone }}
        </div>

        <!-- Botão para voltar à lista de alunos -->
        <a href="{{ route('alunos.index') }}" class="inline-block px-4 py-2 bg-blue-500 text-white rounded hover:bg-blue-700">
            Voltar para Lista de Alunos
        </a>

        <!-- Botão para editar o aluno -->
        <a href="{{ route('alunos.edit', $aluno->id) }}" class="inline-block px-4 py-2 bg-yellow-500 text-white rounded hover:bg-yellow-700 ml-2">
            Editar Aluno
        </a>

        <!-- Formulário para deletar o aluno -->
        <form action="{{ route('alunos.destroy', $aluno->id) }}" method="POST" class="inline-block ml-2">
            @csrf
            @method('DELETE')
            <button type="submit" class="px-4 py-2 bg-red-500 text-white rounded hover:bg-red-700">
                Deletar Aluno
            </button>
        </form>
    </div>
</x-app-layout>
