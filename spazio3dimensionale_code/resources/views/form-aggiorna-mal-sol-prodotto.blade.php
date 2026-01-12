<x-base>
    <x-form-mal-sol-prodotto :action="route('prodotto.malsol.aggiorna', $malSol->id)" :$malSol method="PUT" :$prodotto_id :indietro="route('prodotto.malsol.mostra', $malSol->id)" />
</x-base>