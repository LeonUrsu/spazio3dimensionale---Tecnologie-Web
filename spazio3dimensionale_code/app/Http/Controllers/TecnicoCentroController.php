<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TecnicoCentroController
{
 public function mostraListaTecnici(): string
    {
        return "mostra la lista dei Tecnici Azienda";
    }

    public function mostraTecnico(): string
    {
        return "mostra Tecnico azienda";
    }

    public function mostraFormAggiorna(): string
    {
        return "aggiorna la form precompilata per aggiornare il TecnicoAzienda";
    }

    public function aggiornaTecnico(): string
    {
        return "aggiorna dati del TecnicoAzienda";
    }

    public function mostraFormCrea(): string
    {
        return "mostraFormCrea TecnicoAzienda";
    }

    public function creaTecnico(): string
    {
        return "creaTecnico TecnicoAzienda";
    }

    public function cancellaTecnico(): string
    {
        return "creaTecnico TecnicoAzienda";
    }

}
