@props(['malsol'])
<x-base>
    <form action="{{route('prodotto.aggiorna.malsol', $malsol->id)}}" method="POST">
        @csrf
        @method('PUT')
        <textarea name="mal" placeholder="malfunzionamento">{{$malsol->mal}}</textarea>
        <textarea name="sol" placeholder="soluzione">{{$malsol->mal}}</textarea>
        <button type="submit">Salva</button>
        {{--Mettere una schermata di verifica se si vuole procedere con il salvataggio--}}
    </form>
    <a href="{{ url()->previous() }}">
        <button type="button">Annulla</button>
    </a>
</x-base>