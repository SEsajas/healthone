<!DOCTYPE html>
<html lang="en">
<?php
include_once('defaults/head.php');
include_once('defaults/menu.php');
global $categories
?>
<body>
<main>
    <div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2" class="active" aria-current="true"></button>
            <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3" class=""></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item">
                <img class="bd-placeholder-img bg-carousel" src="/Pictures/pic8.jpg" alt="pic1" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false">
            </div>
            <div class="carousel-item active">
                <img class="bd-placeholder-img bg-carousel" src="/Pictures/pic9.jpg" alt="pic1" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false">
            </div>
            <div class="carousel-item">
                <img class="bd-placeholder-img bg-carousel" src="/Pictures/pic10.jpg" alt="pic1" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
    <br>
    <br>
    <br>
    <br>
    <Div class="container">

        <div class="row gy-3 ">
            <?php foreach ($categories as $category): ?>
                <div class="col-sm-4 col-md-3">
                    <div class="card">
                        <div class="card-body text-center">
                            <a href="/category/<?= $category->id ?>">
                                <img class="product-img img-responsive center-block" src="<?= $category->picture ?>" alt="image">
                            </a>
                            <div class="card-title mb-3"><?= $category->name ?></div>
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
include_once('defaults/footer.php');
?>
</body>
</html>

