@props(['prodotto'])
<x-base>
    <form action="{{route('prodotto.aggiorna', $prodotto->id)}}" method="POST">
        @csrf
        @method('PUT')
        <input type="text" name="marca" placeholder="marca" value="{{$prodotto->marca}}">
        <input type="text" name="modello" placeholder="modello" value="{{$prodotto->modello}}">
        <textarea type="text" name="descrizione" placeholder="descrizione">{{$prodotto->descrizione}}</textarea>
        <textarea type="text" name="modalità_installazione" placeholder="modalità di installazione">{{$prodotto->modalità_installazione}}</textarea>
        <input type="text" name="prezzo" placeholder="prezzo" value="{{$prodotto->prezzo}}">
        <input type="text" name="dimensioni" placeholder="dimensioni" value="{{$prodotto->dimensioni}}">
        <input type="text" name="peso" placeholder="peso" value="{{$prodotto->peso}}">
        <input type="text" name="consumo_watt" placeholder="consumo watt" value="{{$prodotto->consumo_watt}}">
        <input type="text" name="volume_stampa" placeholder="volume di stampa" value="{{$prodotto->volume_stampa}}">
        <button method="submit">Salva</button>
    </form>
    <a href="{{ url()->previous() }}">
        <button type="button">Annulla</button>
    </a>
</x-base>