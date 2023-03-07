<?php


class Categoria
{
    public $nome;
    public $icona;

    function __construct(
        string $nome,
        string $icona
    ) {
        $this->nome = $nome;
        $this->icona = $icona;
    }
}
