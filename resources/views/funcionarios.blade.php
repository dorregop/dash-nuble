<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('funcionarios') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <form action="{{ route('importFuncionario') }}" method="POST" enctype="multipart/form-data">
                     @csrf
                    <div class="form-group">
                        <label for="file">Seleccione el archivo a cargar</label>
                            <input class="form form-control" type="file" name="file">
                    </div>
                    <hr>
                    <button class="btn-sm float-right">Importar</button>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>
