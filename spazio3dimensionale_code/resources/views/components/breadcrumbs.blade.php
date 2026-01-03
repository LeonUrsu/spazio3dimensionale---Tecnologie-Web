{{--Questo è il file per gestire in modo automatico l'elemento di navigazione all'interno della pagina del sito, si chiama breadcrumbs--}}
{{-- TODO Questa pagina forse farebbe da eliminare e implementare qualcosa di più moderno e semplice--}}
<nav aria-label="breadcrumb" class="my-4">
    <ol class="flex list-none p-0 text-gray-500 text-sm">
        {{-- Link fisso alla Home --}}
        <li class="flex items-center">
            <a href="/" class="hover:text-blue-600">Home</a>
            <span class="mx-2">/</span>
        </li>

        @php
        $segments = request()->segments();
        $url = '';
        @endphp

        @foreach($segments as $segment)
        @php
        $url .= '/' . $segment;
        // Saltiamo i segmenti numerici (ID) per non sporcare la barra
        if (is_numeric($segment)) continue;

        // Pulizia del testo: togliamo trattini e mettiamo la maiuscola
        $label = ucwords(str_replace(['-', '_'], ' ', $segment));
        @endphp

        <li class="flex items-center">
            @if(!$loop->last)
            <a href="{{ $url }}" class="hover:text-blue-600">{{ $label }}</a>
            <span class="mx-2">/</span>
            @else
            {{-- L'ultimo elemento non è un link ed è evidenziato --}}
            <span class="font-bold text-gray-800">{{ $label }}</span>
            @endif
        </li>
        @endforeach
    </ol>
</nav>