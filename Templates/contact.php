<!DOCTYPE html>
    <html lang="en">

    <body>
    <?php
    include_once('defaults/head.php');
    include_once('defaults/menu.php');
    ?>
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

                <div class="container">
                    <div class="row featurette">
                        <div class="col-md-7 order-md-2">
                            <br>
                            <h3> Route berekening </h3>
                            <br>
                            <br>
                            <br>
                            <p>
                                Sportcentrum Health One is makkelijk te bereiken met bus 37, u die dan uit testtappen bij de halte Schoolstraat en dan 4 minuten telopen.
                                Verder zijn er ook meer dan genoeg pakeerplaatsen beschickbaar mocht u met de auto komen.
                            </p>
                        </div>
                        <div class="col-md-5 order-md-1">
                            <p>
                                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2456.6391890218893!2d4.330076815787973!3d51.
                                    9952296797182!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47c5b44d61a108cf%3A0xf69943896f1def32!2sZuidhoornseweg
                                    %206A%2C%202625dj%2C%202625%20DV%20Den%20Hoorn!5e0!3m2!1sen!2snl!4v1634412179669!5m2!1sen!2snl" width="550" height="400" style="border:0;" allowfullscreen="" loading="lazy">
                                </iframe>
                            </p>
                        </div>
                    </div>
                    <hr>
                    <div class="row featurette">
                        <div class="times col-md-5 order-md-1">
                            <h3>Openingstijden</h3>
                            <table class="table table-striped">
                                <thead>
                                <tr>
                                    <td>Dag</td>
                                    <td>Openingstijd:</td>
                                    <td>Sluitingstijd:</td>
                                </tr>
                                </thead>
                                <tbody>
                                <?php global $times ?>
                                <?php foreach ($times as $time): ?>
                                    <tr>
                                        <td><?= $time->day; ?></td>
                                        <td><?= $time->open_time;?></td>
                                        <td><?= $time->closing_time;?></td>
                                    </tr>
                                <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div>
                        <div class="col-md-7 order-md-2">
                            <h3>Contact gegevens</h3>
                            <p>
                                Health One
                                <br>
                                Zuidhoornseweg 6a
                                <br>
                                2635 DJ Den Hoorn
                                <br>
                                <br>
                                <a href="mailto:info@healthone.com" target="_blank">
                                    <i class="fas fa-at"></i> info@healthone.com
                                </a>
                                <br>
                                <i class="fas fa-phone"></i> Telefoon nummer: 015-2578924
                                <br>
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-facebook" viewBox="0 0 16 16">
                                    <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z"/>
                                </svg> Coming soon
                                <br>
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-instagram" viewBox="0 0 16 16">
                                    <path d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z"/>
                                </svg> Coming soon
                            </p>
                        </div>
                    </div>
                </div>
            </main>
        <br>
        <br>
        <br>
    <?php
        include_once ('defaults/footer.php');
    ?>
    </body>
</html>
