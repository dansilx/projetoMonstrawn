<x-app-layout>
    <div class="container mx-auto">
        <h1 class="text-2xl font-bold mb-4">Cadastrar Novo Aluno</h1>

        @if ($errors->any())
            <div class="bg-red-500 text-white p-2 mb-4 rounded">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('alunos.store') }}" method="POST">
            @csrf
            <div class="mb-4">
                <label for="nome" class="block text-sm font-medium">Nome</label>
                <input type="text" name="nome" id="nome" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm" value="{{ old('nome') }}" required>
            </div>
            <div class="mb-4">
                <label for="email" class="block text-sm font-medium">Email</label>
                <input type="email" name="email" id="email" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm" value="{{ old('email') }}" required>
            </div>
            <div class="mb-4">
                <label for="idade" class="block text-sm font-medium">Idade</label>
                <input type="number" name="idade" id="idade" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm" value="{{ old('idade') }}" required>
            </div>
            <div class="mb-4">
                <label for="endereco" class="block text-sm font-medium">Endereço</label>
                <input type="text" name="endereco" id="endereco" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm" value="{{ old('endereco') }}" required>
            </div>
            <div class="mb-4">
                <label for="telefone" class="block text-sm font-medium">Telefone</label>
                <input type="text" name="telefone" id="telefone" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm" value="{{ old('telefone') }}" required>
            </div>
            <div class="mb-4">
                <label for="data_matricula" class="block text-sm font-medium">Data de Matrícula</label>
                <input type="date" name="data_matricula" id="data_matricula" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm" value="{{ old('data_matricula') }}" required>
            </div>
            <button type="submit" class="bg-blue-500 text-black px-4 py-2 rounded">Cadastrar</button>
        </form>
    </div>
</x-app-layout>
