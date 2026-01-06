<?php

use Diglactic\Breadcrumbs\Breadcrumbs;
use Diglactic\Breadcrumbs\Generator as BreadcrumbTrail;


//Pubblici  ----------------------------------------------------------------------

// Home
Breadcrumbs::for('home', function (BreadcrumbTrail $trail) {
    $trail->push('home', route('home'));
});

// Home > Catalogo Prodotti > 
Breadcrumbs::for('prodotto.lista', function (BreadcrumbTrail $trail) {
    $trail->parent('home');
    $trail->push('prodotti', route('prodotto.lista'));
});

// Home > Prodotti > [Nome Prodotto]
Breadcrumbs::for('prodotto.mostra', function (BreadcrumbTrail $trail, $prodotto) {
    $trail->parent('prodotto.lista');
    $trail->push('articolo', route('prodotto.mostra', $prodotto->id));
});

// Home > Prodotti > [Nome Prodotto] > Malfunzionamento
Breadcrumbs::for('prodotto.malsol.lista', function (BreadcrumbTrail $trail, $prodotto) {
    $trail->parent('prodotto.mostra', $prodotto->id);
    $trail->push('articolo', route('prodotto.malsol.lista', $prodotto->id));
});

// Home > [Lista Centri]
Breadcrumbs::for('centro.lista', function (BreadcrumbTrail $trail) {
    $trail->parent('home');
    $trail->push('centri', route('centro.lista'));
});

// Home > [Lista Centri] > [Lista Tecnici Centro]
Breadcrumbs::for('tecnico.centro.lista', function (BreadcrumbTrail $trail) {
    $trail->parent('home');
    $trail->push('tecnici', route('tecnico.centro.lista'));
});

// Home > [Lista Tecnici] > [Lista Tecnici Azienda] > [Tecnico Azienda]
Breadcrumbs::for('tecnico.centro.mostra', function (BreadcrumbTrail $trail, $tecnico) {
    $trail->parent('tecnico.centro.lista');
    $trail->push('tecnico', route('tecnico.centro.mostra', $tecnico->id));
});

// Home > [Lista Tecnici] > [Lista Tecnici Azienda]
Breadcrumbs::for('tecnico.azienda.lista', function (BreadcrumbTrail $trail) {
    $trail->parent('home');
    $trail->push('tecnici', route('tecnico.azienda.lista'));
});

// Home > [Lista Tecnici] > [Lista Tecnici Azienda] > [Tecnico Azienda]
Breadcrumbs::for('tecnico.azienda.mostra', function (BreadcrumbTrail $trail, $tecnico) {
    $trail->parent('tecnico.azienda.lista');
    $trail->push('tecnico', route('tecnico.azienda.mostra', $tecnico->id));
});










































// Home > Prodotti > [Nome Prodotto] > MalSol
Breadcrumbs::for('prodotto.malsol.mostra', function (BreadcrumbTrail $trail, $malsol) {
    $trail->parent('prodotto.mostra');
    $trail->push('malfunzionamenti', route('prodotto.malsol.mostra', $malsol->id));
});
