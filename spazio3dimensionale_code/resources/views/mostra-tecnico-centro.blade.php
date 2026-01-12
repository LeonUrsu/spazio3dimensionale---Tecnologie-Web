@props(['tecnico'])
<x-base>
    <x-mostra-tecnico :$tecnico rottaMostraTecnico="tecnico.centro.mostra" rottaCancellaTecnico="tecnico.centro.cancella" rottaFormAggiornaTecnico="tecnico.centro.form.aggiorna" :$nomeCentro/>
</x-base>