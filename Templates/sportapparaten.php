<!DOCTYPE html>
<html lang="en">
<?php
include_once('defaults/head.php');
include_once('defaults/menu.php');
global $products;
?>
<body>

<br>
<br>
<br>
<br>
<main>
    <Div class="container">

        <div class="card-group">
            <?php foreach ($products as & $product): ?>
                <div class="col-lg-3">
                    <div class="card">
                        <div class="card-body">
                            <a class="bnt button  button "
                               href="/product/<?=$product->id?>">
                                <img class="card-img-top card-size auto d-block img-fluid" src="<?= $product->picture; ?>" alt="image">
                            </a>
                            <h5><?= $product->name; ?></h5>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </Div>
</main>
<br>
<br>
<br>

<?php
include_once ('defaults/footer.php');
?>
</body>
</html>