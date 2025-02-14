<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div style="display: flex; justify-content: center; align-items: center; padding-top: 50px;">
        <a href="#modal" class="btn-dashboard" id="crea">Crea Album</a>
    </div>

    <div id="modal" class="modal">
        <div class="modal-content">
            <a href="#" class="close">&times;</a>
            <h2>Crea un nuovo Album</h2>
            <form action="{{ route('album.create') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="title">Titolo Album:</label>
                <input type="text" name="title" id="title" class="form-control" required>
            </div>
            <button type="submit" class="btn btn-primary">Salva Album</button>
            </form>
        </div>
        </div>

    <div class="py-12">
        @foreach ($albums as $album)
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8" style="padding-bottom: 25px">
                <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 text-gray-900 dark:text-gray-100">
                        <div style="display: flex; align-items: center;">
                            <div>
                                <a href="{{ route('album.edit', $album->id) }}" class="btn-dashboard" id="visualizza">
                                    {{ $album->title }}
                                </a>
                            </div>
                            <div style="margin-left: auto; display: flex; gap: 10px;">
                                <a href="{{ route('album.edit', $album->id) }}" class="btn-dashboard" id="modifica">Modifica</a>
                                <form action="{{ route('album.delete', $album->id) }}" method="POST" style="display:inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn-dashboard" id="elimina" onclick="return confirm('Sei sicuro di voler eliminare questo album?')">
                                        Elimina
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>

</x-app-layout>

