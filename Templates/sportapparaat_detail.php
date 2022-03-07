<!DOCTYPE html>
<html lang="en">
<?php
include_once('defaults/head.php');
include_once('defaults/menu.php');
global $product;
global $reviews;
global $reviewGiven;
?>

<body>

<br>
<br>
<br>
<br>
<main>
    <Div class="container">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="/categories/<?= $product->category_id ?>">Products</a></li>
                <li class="breadcrumb-item"><a href="/categories/<?= $product->category_id ?>/product/<?=$product->id?>"><?= $product->name ?></a></li>
            </ol>
        </nav>
        <hr>
<!--        --><?php //if (isset($reviewGiven)&& $reviewGiven['result'] === false){?>
<!--            <div class="alert alert-warning alert-dismissible fade show" role="alert">-->
<!--                <strong> :( </strong> Er ging iets fout met het maken van de review, Probeer het nogmaals.-->
<!--            </div>-->
<!--        --><?php //} elseif ($reviewGiven['result'] === true){?>
<!--            <div class="alert alert-success alert-dismissible fade show" role="alert">-->
<!--                <strong> Geslaagd! </strong> Bedankt voor je review.-->
<!--            </div>-->
<!--        --><?php //}?>

        <div class="row featurette">
            <div class="col-md-7 order-md-2">
                <img class="img-fluid" src="<?= $product->picture; ?>" alt="image">
                <br>
                <br>
                <!-- Button trigger review -->
                <button type="button" class="btn btn-outline-secondary yellow text" data-bs-toggle="modal" data-bs-target="#exampleModal">
                    Review aanmaken
                </button>

                <!-- Review form -->
                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel"><div class="text">Review aanmaken</div></h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <form action="/product/<?php echo $product->id;?>" method="POST">
                                    <input type="hidden" name="product_id" value="<?= $product->id;?>">
                                    <input type="hidden" name="form-sort" value="review">
                                    <div class="mb-3">
                                        Voor en Achternaam
                                        <input type="text" required name="name" class="form-control"
                                        <?php if (isset($_POST['name'])){echo 'value="'.$_POST['name'].'"';}?>
                                        >
                                    </div>
                                    <div class="form-group mb-3">
                                        Review:
                                        <textarea name="reviewtext" class="form-control" rows="3"><?php
                                            if (isset($_POST['reviewtext'])){echo $_POST['reviewtext'];}?>
                                        </textarea>
                                    </div>

                                    </div>
                                    <div class="modal-footer">
                                        <!--                                Close review back to page-->
                                        <button type="button" class="form-group btn btn-secondary" data-bs-dismiss="modal"><div class="text">Sluiten</div></button>
                                        <!--                                Send Review to database-->
                                        <button type="submit" class="form-group btn btn-secondary yellow"><div class="text">Posten</div></button>
                                    </div>
                                </form>
                            </div>

                        </div>
                    </div>
                </div>

            </div>
            <div class="col-md-5 order-md-1">
                <p class="lead">
                    <?= $product->description?>
                </p>
            </div>
        </div>
        <hr>
                                        <!--        Reviews from database-->
        <div>
            <div class="accordion" id="accordionExample">
                <?php foreach ($reviews as $review): ?>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="button<?=$review->id; ?>">
                            <button class="accordion-button yellow  text" type="button" data-bs-toggle="collapse" data-bs-target="#collapse<?=$review->id; ?>"
                                    aria-expanded="true" aria-controls="collapse<?=$review->id; ?>">
                                <?= $review->date; ?>
                            </button>
                        </h2>
                        <div id="collapse<?=$review->id; ?>" class="accordion-collapse collapse show" aria-labelledby="button<?=$review->id; ?>" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <strong><?= $review->name; ?></strong> <?= $review->description; ?>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
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