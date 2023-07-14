<?php
include_once __DIR__ . '/database/db.php';

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- CDN Bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">

    <!-- Adding personal style file -->
    <link rel="stylesheet" href="./styles/style.css">
    <title>E-commerce</title>
</head>

<body>
    <header>
        <div class="navbar">
            <img src="https://www.filepicker.io/api/file/PrjQ7ZxTQye3aR2Tzt3N" alt="Logo">
        </div>
    </header>
    <main>
        <div class="container mt-4">
            <div class="row">
                <?php foreach ($products as $item) { ?>
                    <div class="col-3 mb-4">
                        <div class="card">
                            <img src="<?php echo $item->image ?>" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title"><?php echo $item->name ?></h5>
                                <p class="card-text">
                                    Prezzo :
                                    <?php echo $item->price . '€' ?>
                                </p>
                                <p class="card-text">
                                    <?php if (property_exists($item, 'morbido')) { ?>
                                        Morbido :
                                        <?php if ($item->morbido) {
                                            echo 'SI';
                                        } else {
                                            echo 'NO';
                                        } ?>
                                    <?php } elseif (property_exists($item, 'tipo')) { ?>
                                        Tipo : <?php echo $item->tipo ?>
                                    <?php } elseif (property_exists($item, 'grandezza')) { ?>
                                        Grandezza : <?php echo $item->grandezza ?>
                                    <?php } ?>
                                </p>
                                <p class="card-text">
                                    <?php if (property_exists($item, 'colore')) { ?>
                                        Colore : <?php echo $item->colore ?>
                                    <?php } elseif (property_exists($item, 'peso')) { ?>
                                        Peso : <?php echo $item->peso ?>
                                    <?php } elseif (property_exists($item, 'taglia_animale')) { ?>
                                        Taglia Animale : <?php echo $item->taglia_animale ?>
                                    <?php } ?>
                                </p>
                                <p class="card-text">
                                    Animale :
                                    <?php echo $item->categoria->categoria ?>
                                </p>
                                <a href="#" class="btn btn-primary">Acquista</a>
                            </div>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>
        </div>
    </main>
</body>

</html>