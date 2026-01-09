<x-base>
    <x-form-tecnico rotta="tecnico.centro.crea" :indietro="route('tecnico.centro.lista')">
        <x-form-tecnico-centro :$centri />
    </x-form-tecnico>
</x-base>