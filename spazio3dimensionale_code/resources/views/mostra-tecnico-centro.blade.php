@props(['tecnico'])
<x-base>
    <x-mostra-tecnico :tecnico="$tecnico" rottaCancellaTecnico="tecnico.centro.cancella" rottaFormAggiornaTecnico="tecnico.centro.form.aggiorna"/>
    {{--mostrare anche il centro del tecnico--}}
</x-base>   