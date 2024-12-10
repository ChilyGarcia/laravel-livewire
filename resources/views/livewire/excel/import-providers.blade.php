<div>
    <form wire:submit.prevent="import">
        <div>
            <label for="file">Selecciona un archivo Excel:</label>
            <input type="file" id="file" wire:model="file">
        </div>

        @error('file')
            <span class="error">{{ $message }}</span>
        @enderror

        <button type="submit">Importar</button>
    </form>

    @if (session()->has('message'))
        <div>{{ session('message') }}</div>
    @endif
</div>
