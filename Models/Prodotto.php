<?php

require_once __DIR__ . '/Categoria.php';



class Prodotto
{
    public $nome;
    public $prezzo;
    public $EAN;
    public $img;
    public $categoria;

    function __construct( //il costruttore serve per costruire la nostra istanza, inizializzando i valori e assegnandogli un valore
        string $nome,
        float $prezzo,
        int $EAN,
        string $img,
        Categoria $categoria //Dependency Injection
    ) {
        $this->nome = $nome; //imposto i valori
        $this->prezzo = $prezzo;
        $this->EAN = $EAN;
        $this->img = $img;

        $this->categoria = $categoria;
    }
}
