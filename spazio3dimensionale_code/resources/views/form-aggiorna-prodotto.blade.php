<x-base>
    <x-form-prodotto :action="route('prodotto.aggiorna', $prodotto->id)" :$prodotto metodo="PUT" :indietro="route('prodotto.mostra', $prodotto->id)" />
</x-base>