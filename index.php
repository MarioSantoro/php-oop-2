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
        <div class="container">
            <div class="row">
                <?php foreach ($products as $item) { ?>
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
                <?php } ?>
            </div>
        </div>
        </div>
    </main>
</body>

</html>