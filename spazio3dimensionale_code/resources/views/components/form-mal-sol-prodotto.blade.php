@props(['action', 'malSol'=>null, 'method'=>'POST', 'prodotto_id', 'indietro'])
<div class="element_with_button_column">
    <form action="{{$action}}" method="POST" class="form-conferma">
        @csrf
        @if($method == 'PUT') @method('PUT') @endif
        <input type="hidden" name="prodotto_id" value={{$prodotto_id}}>
        <div>
            <textarea name="titolo" placeholder="titolo" class="textarea-titolo @error('titolo') is-invalid @enderror">{{ old('titolo', $malSol?->titolo) }}</textarea>
            <label>Titolo:</label>
        </div>
        <div>
            <textarea name="mal" placeholder="malfunzionamento" class="@error('mal') is-invalid @enderror">{{ old('mal', $malSol?->mal) }}</textarea>
            <label>Malfunzionamento:</label>
        </div>
        <div>
            <textarea name="sol" placeholder="soluzione" class="@error('sol') is-invalid @enderror">{{ old('sol', $malSol?->sol) }}</textarea>
            <label>Soluzione:</label>
        </div>
        @if ($errors->any())
        <div class="alert-error-summary" style="color: red">
            <strong>Attenzione:</strong> Ci sono degli errori. Controlla i campi evidenziati.
        </div>
        @endif
        <button type="submit">Salva</button>
    </form>

    <button type="button" class="btn-annulla" onclick="window.location.href='{{ $indietro }}'">
        Indietro
    </button>

</div>