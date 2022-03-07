<!DOCTYPE html>
<html lang="en">
<?php
include_once('defaults/head.php');
include_once('defaults/menu.php');
global $packages;
?>
<br>
<br>
<br>
<main>
    <div class="container">
        <div class="row featurette">
            <div class="col-md-7">
                <h2 class="featurette-heading yellow-text">Over Ons.</h2>
                <p class="lead">Health One is een sportcentrum die net 2 jaar oud is opgericht door Jeffrey Klein in Den Hoorn.
                    Jeffrey is zelf erg sportief en vond altijd al dat gezondheid heel belangrijk is vandaar dat hij besloten heeft een
                    sportcentrum te openen voor mensen vanaf 16 jaar tot en met 70 jaar.

                </p>
            </div>
            <div class="col-md-5">
                <img src="/Pictures/pic7.jpg">

            </div>
        </div>
        <hr class="featurette-divider">

        <div class="row featurette">
            <div class="col-md-7 order-md-2">

                <p class="lead">
                    Sportcentrum Health One maakt gebruik van een 30 minuten systeem dat betekent dus dat je 30 minuten krijgt per apparaat,
                    zodat iedereen er gebruik van kan maken. In de dames en herenkleedkamers zijn er kluisjes aanwezig die gebruik maken
                    van een 4 cijfercode combinatie, de kleedkamers bevatten ook douches en
                    toiletten je zal wel zelf een handdoek mee moeten nemen.
                </p>
            </div>
            <div class="col-md-5 order-md-1">
                <img src="/Pictures/pic6.jpg">
            </div>
        </div>

        <hr class="featurette-divider">

        <div class="row featurette">
            <div class="col-md-7">
                <p class="lead">
                    Verder is er in het sportcentrum ook een bar aanwezig waar je tussen het sporten
                    door rustig wat kan drinken tijdens het bijkomen en dan weel volop aan de slag kan.
                    Met een hele mooie moderne indeling in het centrum van
                    moderne apparatuur en voorzien van tv’s en natuurlijk geweldige muziek.
                </p>
            </div>
            <div class="col-md-5">
                <img src="/Pictures/cafe.jpg">
            </div>
        </div>

        <hr class="featurette-divider">

        <div class="row">
        <h4> Sportabonnementen</h4>
            <div class="card-group">
                <?php foreach ($packages as & $package): ?>
                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-header">
                                <h5><?= $package->type; ?></h5>
                            </div>
                            <div class="card-body">
                                <?= $package->description; ?>
                            </div>
                            <div class="card-footer">
                                €<?= $package->price; ?>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
</main>
<?php
include_once('defaults/footer.php');

?>


</body>
</html>

