@props(['tecnico'])
<x-base>
    <x-mostra-tecnico :$tecnico rottaMostraTecnico="tecnico.azienda.mostra" rottaCancellaTecnico="tecnico.azienda.cancella" rottaFormAggiornaTecnico="tecnico.azienda.form.aggiorna"/>
</x-base>   