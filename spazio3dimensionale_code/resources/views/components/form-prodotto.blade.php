@props(['action', 'prodotto'=>null, 'metodo'=>'POST', 'indietro'])
<div>
    <form action="{{$action}}" method="POST" enctype="multipart/form-data" class="element_with_button_column" onsubmit="return confirm('Sei sicuro di voler salvare le modifiche?')">
        @csrf
        @if($metodo == 'PUT') @method('PUT') @endif
        {{--potrei aggiungere una box per fare drag and drop delle foto del prodotto--}}
        <div class="form-group">
            <input type="file" name="immagine" id="immagine" accept="image/*"  class="@error('immagine') is-invalid @enderror">
            <label for="immagine">Immagine Prodotto:</label>
        </div>
        <div>
            <input type="text" name="marca" placeholder="marca" value="{{ old('marca', $prodotto?->marca) }}"  class="@error('marca') is-invalid @enderror">
            <label for="marca">Marca:</label>
        </div>
        <div>
            <input type="text" name="modello" placeholder="modello" value="{{ old('modello', $prodotto?->modello) }}"  class="@error('modello') is-invalid @enderror">
            <label for="modello">Modello:</label>
        </div>
        <div>
            <textarea name="descrizione" placeholder="descrizione" class="@error('descrizione') is-invalid @enderror">{{ old('descrizione', $prodotto?->descrizione) }}</textarea>
            <label for="descrizione">Descrizione:</label>
        </div>
        <div>
            <textarea name="modalità_installazione" placeholder="modalità di installazione" class="@error('modalità_installazione') is-invalid @enderror">{{ old('modalità_installazione', $prodotto?->modalità_installazione) }}</textarea>
            <label for="descrizione">modalità di installazione:</label>
        </div>
        {{--<input type="text" name="prezzo" placeholder="prezzo" value="{{ old('prezzo', $prodotto?->prezzo) }}"  class="@error('prezzo') is-invalid @enderror">--}}
        <div>
            <input type="text" name="dimensioni" placeholder="dimensioni" value="{{ old('dimensioni', $prodotto?->dimensioni) }}"  class="@error('dimensioni') is-invalid @enderror">
            <label for="descrizione">Dimensioni:</label>
        </div>
        <div>
            <input type="text" name="peso" placeholder="peso" value="{{ old('peso', $prodotto?->peso) }}"  class="@error('peso') is-invalid @enderror">
            <label for="descrizione">Peso:</label>
        </div>
        <div>
            <input type="text" name="consumo_watt" placeholder="consumo watt" value="{{ old('consumo_watt', $prodotto?->consumo_watt) }}"  class="@error('consumo_watt') is-invalid @enderror">
            <label for="descrizione">consumo watt:</label>
        </div>
        <div>
            <input type="text" name="volume_stampa" placeholder="volume di stampa" value="{{ old('volume_stampa', $prodotto?->volume_stampa) }}"  class="@error('volume_di_stampa') is-invalid @enderror">
            <label for="descrizione">volume stampa:</label>
        </div>
        <button type="submit">Salva</button>
    </form>
    <form action={{$indietro}}>
        <button type="submit">Annulla</button>
    </form>
</div>