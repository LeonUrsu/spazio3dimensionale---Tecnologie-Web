<div>
    <form action="{{route('home')}}">
        <button>Indietro</button>
    </form>
    <form action="{{ route('prodotto.lista.ricerca') }}" method="GET" >
        <input type="text" 
               name="ricerca" 
               placeholder="Cerca descrizione (es. lav*)..." 
               value="{{ request('ricerca') }}" >
        <button type="submit"> Cerca </button>

        @if(request('ricerca'))
            <a href="{{ route('prodotto.lista') }}" >Annulla</a>
        @endif
    </form>
    <h1>Catalogo dei prodotti disponibili</h1>
    @can('isAdmin')
    <form action="{{route('prodotto.form.crea')}}">
        <button>Aggiungi Prodotto</button>
    </form>
    @endcan
    @foreach ($prodotti as $prodotto )
    <div>
        <h2 class="nome_centro">prodotto: {{$prodotto->marca}} {{$prodotto->modello}} - {{$prodotto->prezzo}}$</h2>
        <form action="{{route('prodotto.mostra', $prodotto->id)}}">
            <button>Mostra info prodotto</button>
        </form>
        <br>
    </div>
    @endforeach
    <div>
        {{ $prodotti->links() }}
    </div>
</div>