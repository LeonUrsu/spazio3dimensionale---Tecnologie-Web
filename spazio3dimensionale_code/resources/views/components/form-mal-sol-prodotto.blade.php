{{--i l crea dovrebbe stare dentro il prodotto così si passa l'id prodotto da associare al malSol--}}
@props(['action', 'malSol'=>null, 'method'=>'POST', 'prodotto_id'])
<div>
    <form action="{{$action}}" method="POST" onsubmit="return confirm('Sei sicuro di voler salvare le modifiche?')">
        @csrf
        @if($method == 'PUT') @method('PUT') @endif
        <input type="hidden" name="prodotto_id" value={{$prodotto_id}}>
        <label>Titolo:</label>
        <textarea name="titolo" placeholder="titolo">{{ old('mal', $malSol?->titolo) }}</textarea>
        <label>Malfunzionamento:</label>
        <textarea name="mal" placeholder="malfunzionamento">{{ old('mal', $malSol?->mal) }}</textarea>
        <label>Soluzione:</label>
        <textarea name="sol" placeholder="soluzione">{{ old('sol', $malSol?->sol) }}</textarea>
        <button type="submit">Salva</button>
        {{--Mettere una schermata di verifica se si vuole procedere con il salvataggio--}}
    </form>
    <a href="{{ url()->previous() }}">
        <button type="button">Annulla</button>
    </a>
</div>