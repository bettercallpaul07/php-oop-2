<?php

require_once __DIR__ . '/Models/Prodotto.php';
require_once __DIR__ . '/Models/Categoria.php';
require_once __DIR__ . '/Models/Cibo.php';

$categoriaCani = new Categoria(
    "Cani",
    "&#128054;"
);

$categoriaGatti = new Categoria(
    "Gatti",
    "&#128049;"
);

var_dump($categoriaCani);

var_dump($categoriaGatti);


$prodotti = [];

$prodotti[] = new Prodotto(
    "Prodotto 1",
    325.00,
    12694991830,
    "http://via.placeholder.com/540x360",
    $categoriaCani
);


$prodotti[] = new Prodotto(
    "Prodotto 2",
    25.00,
    12694991830,
    "http://via.placeholder.com/540x360",
    $categoriaGatti
);


var_dump($prodotti);


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">


    <link rel="stylesheet" href="css/style.css">

    <title>BoolZoo Shop</title>
</head>

<body>

    <h1>BoolZoo Shop</h1>

    <div class="container">
        <div class="row">
            <?php
            foreach ($prodotti as $index => $prodotto) {

            ?>
                <div class="col-4">
                    <div class="card" style="width: 18rem;">
                        <img class="card-img-top" src="<?php echo $prodotto->img; ?>" alt="<?php echo $prodotto->nome; ?>">
                        <div class="card-body">
                            <h5 class="card-title"><?php echo $prodotto->nome; ?></h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <a href="#" class="btn btn-primary">Vai al prodotto</a>

                        </div>
                    </div>

                </div>

            <?php } ?>


        </div>
    </div>



</body>

</html>