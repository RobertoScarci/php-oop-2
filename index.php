<?php
require_once __DIR__ . '/category/Product.php';
?>
<!DOCTYPE html>
<html lang="it">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pet Shop</title>

    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">

    <link rel="stylesheet" href="./style.css">

</head>

<body>
    <article class="container">
        <div class="row">
            <?php foreach ($petToolList as $petTool) { ?>
            <div class="col-3 mb-5">
                <div class="card col-6" style="width: 18rem;">
                    <img src=" <?php echo $petTool->imageUrl ?> " class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title"><?php echo $petTool->getNameProduct() ?></h5>
                        <p class="card-text">Descrizione: <?php echo $petTool->getDescription() ?></p>
                        <p class="card-text">Prezzo: <?php echo $petTool->getPrice() ?>&euro;</p>
                        <p class="card-text">Dimensioni: <?php echo $petTool->getSize() ?></p>
                        <p class="card-text">Adatto per: <?php echo $petTool->getCategory()->getType() ?></p>

                    </div>
                </div>
            </div>
            <?php } ?>
            <?php foreach ($foodPetList as $foodPet) { ?>
            <div class="col-3">
                <div class="card col-6" style="width: 18rem;">
                    <img src=" <?php echo $foodPet->imageUrl ?> " class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title"><?php echo $foodPet->getNameProduct() ?></h5>
                        <p class="card-text">Descrizione: <?php echo $foodPet->getDescription() ?></p>
                        <p class="card-text">Prezzo: <?php echo $foodPet->getPrice() ?>&euro;</p>
                        <p class="card-text">Adatto per: <?php echo $petTool->getCategory()->getType() ?></p>

                        <p class="card-text">Descrizione: <?php echo $foodPet->getTypeOfFlavor() ?></p>

                    </div>
                </div>
            </div>
            <?php } ?>
            <?php foreach ($toyPetList as $toyPet) { ?>
            <div class="col-3">
                <div class="card col-6" style="width: 18rem;">
                    <img src=" <?php echo $toyPet->imageUrl ?> " class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title"><?php echo $toyPet->getNameProduct() ?></h5>
                        <p class="card-text">Descrizione: <?php echo $toyPet->getDescription() ?></p>
                        <p class="card-text">Prezzo: <?php echo $toyPet->getPrice() ?>&euro;</p>
                        <p class="card-text">Adatto per: <?php echo $toyPet->getCategory()->getType() ?></p>

                        <p class="card-text">Descrizione: <?php echo $toyPet->getMaterial() ?></p>

                    </div>
                </div>
            </div>
            <?php } ?>
        </div>
    </article>
</body>

</html>