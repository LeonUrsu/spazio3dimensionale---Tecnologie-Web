<!DOCTYPE html>
<html>

<head>
    <title>Spazio3Dimensionale</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>

<body>
    <header class="container">
        <nav class="menu-box">
            <div class="logo-container">
                <a href="/">
                    <img src="{{ asset('images/logo_spazio3Dimensionale.png') }}" alt="Logo Spazio3D" class="site-logo">
                </a>
            </div>
            <form action="{{route('centro.lista')}}" method=GET>
                @csrf
                <button class="menu-button" type="submit">Centri Disponibili</button>
            </form>

            <form action="{{route('prodotto.lista')}}" method=GET>
                @csrf
                <button type="submit">Catalogo Prodotti</button>
            </form>

            @can('isAdmin')
            <form action="{{route('tecnico.centro.lista')}}" method=GET>
                <button type="submit">Vedi Tecnici Centri</button>
            </form>
            <form action="{{route('tecnico.azienda.lista')}}" method=GET>
                <button type="submit">Vedi Tecnici Azienda</button>
            </form>
            @endcan

            @guest
            <form action="{{route('login')}}" method=GET>
                @csrf
                <button type="submit">Login</button>
            </form>
            @endguest

            @auth
            <form action="{{route('logout')}}" method=POST onsubmit="return confirm('Sei sicuro di voler procedere con il logout?')">
                @csrf
                <button type="submit">Logout</button>
            </form>
            @endauth

        </nav>
    </header>
    <main class="container">
        {{ $slot }}
    </main>
    <footer class="container">
        <p> Chiamaci a: {{ config('azienda.telefono') }} </p>
        <p> Scrivici a: {{ config('azienda.email') }} </p>
        <p> Vineni a trovarci in: {{ config('azienda.indirizzo') }} </p>
        <p> Orari a: {{ config('azienda.orari') }} </p>
        <p> Developer a: {{ config('azienda.developer') }} </p>
        <p>//TODO Mettere Qui il link per la documentazione</p>
        <p>esame Tecnologie Web pazio3dimensionale </p>
    </footer>
</body>

</html>