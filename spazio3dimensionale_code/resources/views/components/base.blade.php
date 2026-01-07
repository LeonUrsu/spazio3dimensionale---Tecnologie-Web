<!DOCTYPE html>
<html>

<head>
    <title>Spazio3Dimensionale</title>
    <link rel="stylesheet" href="/style.css">
</head>

<body>
    <main>
        {{ $slot }}
    </main>
    <br>
    <footer>
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