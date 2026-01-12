<x-base>
    <x-form-mal-sol-prodotto :action="route('prodotto.crea.malsol')" :$prodotto_id :indietro="route('prodotto.malsol.lista', $prodotto_id)" />
</x-base>