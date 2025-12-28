<x-base>
    <div>
        @foreach ($malfunzionamenti as $mal)
        <h2>
            $malfunzionamento === {{$mal->mal}}
            <form action="{{route('prodotto.mostra.mal', $mal)}}" method="GET">
                <button type="submit">Vedi dettagli</button>
            </form>
        </h2>
        <br>
        @endforeach
    </div>
</x-base>