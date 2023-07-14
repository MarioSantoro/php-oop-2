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
            <img src="" alt="Logo">
        </div>
    </header>
    <main>
        <div class="container mt-4">
            <div class="row">
                <?php foreach ($game as $item) { ?>
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
                                    Morbido :
                                    <?php if ($item->morbido) {
                                        echo 'SI';
                                    } else {
                                        echo 'NO';
                                    } ?>
                                </p>
                                <p class="card-text">
                                    Colore :
                                    <?php echo $item->colore ?>
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

                <?php foreach ($food as $item) { ?>
                    <div class="col-3  mb-4">
                        <div class="card">
                            <img src="<?php echo $item->image ?>" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title"><?php echo $item->name ?></h5>
                                <p class="card-text">
                                    Prezzo :
                                    <?php echo $item->price . '€' ?>
                                </p>
                                <p class="card-text">
                                    Tipo :
                                    <?php echo $item->tipo ?>
                                </p>
                                <p class="card-text">
                                    Peso :
                                    <?php echo $item->peso . 'Kg' ?>
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

                <?php foreach ($cuccia as $item) { ?>
                    <div class="col-3">
                        <div class="card">
                            <img src="<?php echo $item->image ?>" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title"><?php echo $item->name ?></h5>
                                <p class="card-text">
                                    Prezzo :
                                    <?php echo $item->price . '€' ?>
                                </p>
                                <p class="card-text">
                                    Grandezza :
                                    <?php echo $item->grandezza ?>
                                </p>
                                <p class="card-text">
                                    Taglia Animale :
                                    <?php echo $item->taglia_animale ?>
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

<!-- <?php foreach ($products as $item) { ?>
                    <div class="col-3">
                        <div class="card">
                            <img src="..." class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title"><?php echo $item->name ?></h5>
                                <p class="card-text">
                                    <?php echo $item->price ?>
                                </p>
                                <p class="card-text">
                                    <?php echo $item->tipo ?>
                                </p>
                                <a href="#" class="btn btn-primary">Acquista</a>
                            </div>
                        </div>
                    </div>
                <?php } ?> -->