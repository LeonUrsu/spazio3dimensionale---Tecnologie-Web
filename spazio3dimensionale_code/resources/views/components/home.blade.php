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
                    <h3><strong>Trova il centro di assistenza più vicino a te tra i {{ $n_centri ?? 0 }} disponibili.</strong></h3>
                    <img src="{{ asset('storage/immagini_home/mappa.png') }}" alt="Stampante 1" class="img_home">
                </div>
                <div class="lista-home-element">
                    <img src="{{ asset('storage/immagini_home/stampanti.png') }}" alt="Stampante 1" class="img_home">
                    <h3><strong>Consulta il nostro catalogo tecnico con oltre {{ $n_prodotti ?? 0 }} articoli.</strong></h3>
                </div>
                <div class="lista-home-element">
                    <h3><strong>Tecnici specializzati nella manutenzione</strong></h3>
                    <img src="{{ asset('storage/immagini_home/manutentore.png') }}" alt="Stampante 1" class="img_home">
                </div>
            </div>
        </div>
    </div>