<x-base>
    <x-form-tecnico rotta="tecnico.centro.aggiorna" metodo='PUT' :$tecnico :indietro="route('tecnico.centro.lista')">
        <x-form-tecnico-centro :$centri :$tecnico />
    </x-form-tecnico>
</x-base>