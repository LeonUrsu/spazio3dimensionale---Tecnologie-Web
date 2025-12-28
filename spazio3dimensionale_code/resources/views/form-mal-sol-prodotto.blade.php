<x-base>
    <form action="{{route('prodotto.aggiorna.malsol, $prodotto->id')}}" method="POST">
        @csrf
        @method('PUT')
        <input type="text" name="mal" placeholder="malfunzionamento">
        <input type="text" name="sol" placeholder="soluzione">
        {{--da mettere i testi che si sono già in questo modo ogni volta il malfunzionamento e sol nn sono vuoti--}}
        <button method="submit">Salva</button>
    </form>
</x-base>