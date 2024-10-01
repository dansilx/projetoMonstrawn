<x-app-layout>
    <div class="container mx-auto">
        <h1 class="text-2xl font-bold mb-4">Lista de Alunos</h1>

        <a href="{{ route('alunos.create') }}" class="bg-blue-500 text-black px-4 py-2 rounded">Cadastrar Novo Aluno</a>

        @if(session('success'))
            <div class="bg-green-500 text-black p-2 mt-4 rounded">
                {{ session('success') }}
            </div>
        @endif

        <table class="min-w-full mt-4 border">
            <thead>
                <tr>
                    <th class="border px-4 py-2">Nome</th>
                    <th class="border px-4 py-2">Email</th>
                    <th class="border px-4 py-2">Ações</th>
                </tr>
            </thead>
            <tbody>
                @foreach($alunos as $aluno)
                    <tr>
                        <td class="border px-4 py-2">{{ $aluno->nome }}</td>
                        <td class="border px-4 py-2">{{ $aluno->email }}</td>
                        <td class="border px-4 py-2">
                            <a href="{{ route('alunos.show', $aluno) }}" class="text-blue-500">Ver</a>
                            <a href="{{ route('alunos.edit', $aluno) }}" class="text-yellow-500 mx-2">Editar</a>
                            <form action="{{ route('alunos.destroy', $aluno) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="text-red-500">Deletar</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</x-app-layout>
