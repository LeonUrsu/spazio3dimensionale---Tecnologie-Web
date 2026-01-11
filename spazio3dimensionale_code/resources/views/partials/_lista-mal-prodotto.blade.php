    @forelse ($malfunzionamenti as $mal)
    <div class="element element_with_button">
        <div>
            <p class="title">{{$mal->titolo}}</p>
            <p class="subtitle"> Descrizione : {{$mal->mal}}</p>
        </div>
        <form action="{{route('prodotto.malsol.mostra', $mal->id)}}" method="GET">
            <button type="submit">Vedi dettagli</button>
        </form>
    </div>
    <br>
    @empty
    <li>Nessun dato trovato.</li>
    @endforelse
    {{--<div class="d-flex justify-content-center mt-4">
        {{ $malfunzionamenti->withQueryString()->links() }}
    </div>--}}