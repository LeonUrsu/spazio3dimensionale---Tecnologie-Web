@props(['tecnico', 'rottaMostraTecnico', 'rottaCancellaTecnico', 'rottaFormAggiornaTecnico'])
<div>
    {{ Breadcrumbs::render($rottaMostraTecnico, $tecnico) }}
    <h4>nome : {{$tecnico->nome}}</h4>
    <h4>cognome : {{$tecnico->cognome}}</h4>
    <form action="{{route($rottaFormAggiornaTecnico, $tecnico->id)}}" method="GET">
        <button type="submit">aggiorna</button>
    </form>
    <form action="{{route($rottaCancellaTecnico, $tecnico->id)}}" method="GET">
        <button type="submit">elimina</button>
    </form>
</div>