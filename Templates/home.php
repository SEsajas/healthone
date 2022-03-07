<!DOCTYPE html>
    <html lang="en">
    <?php
    include_once('defaults/head.php');
    include_once('defaults/menu.php');
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

                            <img class="bd-placeholder-img bg-carousel" src="/Pictures/pic1.jpg" alt="pic1" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false">

                            <div class="container">
                                <div class="carousel-caption text-start">

                                    <!-- <h1>Lid worden.</h1>
                                    <p class="carousel-text">Bekijk hier onze paketten.</p>

                                    <p><a class="btn btn-lg btn-primary" href="#">Sign up today</a></p> -->
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item active">
                            <img class="bd-placeholder-img bg-carousel" src="/Pictures/pic2.jpg" alt="pic1" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false">

                            <div class="container">
                                <div class="carousel-caption">
                                    <h1>Welkom bij Health One</h1>
                                    <p class="carousel-text"></p>
                                    <p><a class="btn btn-lg btn-outline-secondary yellow" href="/overOns">Klik hier.</a></p>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img class="bd-placeholder-img bg-carousel" src="/Pictures/pic3.jpg" alt="pic1" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false">

                            <div class="container">
                                <div class="carousel-caption text-end">
                                    <h1>Bekijk al onze sportapparaten.</h1>
                                    <p></p>
                                    <p><a class="btn btn-lg btn-outline-secondary yellow" href="/categories">Klik hier.</a></p>
                                </div>
                            </div>
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


                <div class="container">
                    <br>
                    <br>

                    <!-- Three columns of text below the carousel -->

                    <div class="row">
                        <div class="col-lg-4">
                            <i class="fas fa-users grey"></i>

                            <h2>Over Ons</h2>
                            <p>
                                Health One is een sportcentrum die net 2 jaar oud is opgericht door Jeffrey Klein in Den Hoorn.
                            </p>

                            <p><a class="btn btn-outline-secondary yellow" href="/overOns">Lees meer.</a></p>
                        </div>

                        <div class="col-lg-4">
                            <i class="fas fa-map grey"></i>

                            <h2>Locatie</h2>
                            <p>Wij zijn in Den Hoorn makkelijk berijkbaar met bus en auto.</p>
                            <p><a class="btn btn-outline-secondary yellow" href="/contact">Lees meer.</a></p>
                        </div>
                        <div class="col-lg-4">
                            <i class="far fa-newspaper grey"></i>

                            <h2>Nieuws</h2>
                            <p>Hou alle updates bij op onze nieuws pagina.</p>
                            <p><a class="btn btn-outline-secondary yellow" href="/nieuwsFeed">Lees meer.</a></p>
                        </div>
                    </div>

                    <hr class="featurette-divider">

                    <div class="row featurette">
                        <div class="col-md-7">
                            <h2 class="featurette-heading">Waar wacht u op. <span class="text-muted yellow-text">Kom langs.</span></h2>
                            <p class="lead">Je bent nooit te oud om te gaan sporten bij Heal One zijn jullie allemaal welkom!
                                Of je nou een beginner bent of een pro, een groepslesdier of fitnessbaas,
                                fan van zweetsessies in de gym of van yoga in je woonkamer,
                                het maakt niet uit. Wie je bent of hoe je ook traint,
                                onze deuren staan wagenwijd voor je open. Health One is er voor jou!.
                            </p>
                        </div>
                        <div class="col-md-5">
                            <img src="/Pictures/pic4.jpg">
                        </div>
                    </div>

                    <hr class="featurette-divider">

                    <div class="row featurette">
                        <div class="col-md-7 order-md-2">
                            <h2 class="featurette-heading">Geloof je het niet?. <span class="text-muted yellow-text">Kom zelf maar kijken.</span></h2>
                            <p class="lead">Bij Health One vind je de nieuwste apparatuur van Matrix en TechnoGym.
                                Alles wat je nodig hebt voor jouw perfecte workout! Hygiëne is altijd al belangrijk geweest en tegenwoordig nog meer.
                                Je kunt je eigen workout doen in de trainingszones.
                            </p>
                        </div>
                        <div class="col-md-5 order-md-1">
                            <img src="/Pictures/pic5.jpg">
                        </div>
                    </div>

                    <hr class="featurette-divider">
                </div>
            </main>
            <?php
            include_once ('defaults/footer.php');
            ?>
    </body>
</html>
