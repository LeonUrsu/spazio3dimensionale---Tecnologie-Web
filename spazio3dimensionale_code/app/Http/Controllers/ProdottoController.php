<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProdottoController
{
    public function mostraListaProdotti(): string
    {
        return "mostra la pagina per creare il prodotto";
    }

    public function mostraProdotto(): string
    {
        return "msotra il prodotto";
    }

    public function mostraFormAggiorna(): string
    {
        return "msotra il form aggiorna";
    }
  
    public function aggiornaProdotto(): string
    {
        return "aggiorna il prodotto nel DB";
    }

    public function mostraFormCrea(): string
    {
        return "mostra la pagina per creare il prodotto";
    }

    public function creaProdotto(): string
    {
        return "crea il prodotto nel DB e torna al catalogo";
    }

    public function cancellaProdotto(): string
    {
        return "cancella il prodotto dal DB";
    }
}
