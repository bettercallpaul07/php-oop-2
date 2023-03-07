<?php

require_once __DIR__ . '/Prodotto.php';


class Cibo extends Prodotto
{
    public $marca;

    function __construct(
        string $nome,
        float $prezzo,
        int $EAN,
        string $img,
        Categoria $categoria,
        string $marca
    ) {
        parent::__construct(
            $nome,
            $prezzo,
            $EAN,
            $img,
            $categoria
        );

        $this->marca = $marca;
    }
}
