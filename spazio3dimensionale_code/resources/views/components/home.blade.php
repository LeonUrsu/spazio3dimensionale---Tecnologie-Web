@props(['n_centri', 'n_prodotti', 'n_tecnici'])
<div class="home-box">
    <div>
        {{ Breadcrumbs::render() }}
    </div>
    <div>
        <div class="titolo-centrale">
            <h1>La piattaforma completa del mondo 3D</h1>
        </div>
        <br>
        <div class="lista-home">
            <div class="lista-home-element">
                <img src="{{ asset('storage/immagini_home/stampanti.png') }}" class="img_home">
                <h3><strong>Consulta il nostro catalogo di stampanti 3D con oltre {{ $n_prodotti ?? 0 }} modelli disponibili</strong></h3>
            </div>
            <div class="lista-home-element">
                <h3><strong>Cerca il nostro centro assistenza più vicino a te tra i {{ $n_centri ?? 0 }} disponibili.</strong></h3>
                <img src="{{ asset('storage/immagini_home/mappa.png') }}" class="img_home">
            </div>
            <div class="lista-home-element">
                <h3><strong>Troverai {{ $n_tecnici ?? 0 }} tecnici specializzati pronti ad aiutarti</strong></h3>
                <img src="{{ asset('storage/immagini_home/manutentore.png') }}" class="img_home">
            </div>
        </div>
    </div>
</div>