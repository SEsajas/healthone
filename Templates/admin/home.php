<!DOCTYPE html>
<html lang="en">
<?php
include_once('defaults/head.php');
include_once('defaults/menu.php');
?>
<body>
<main>
    <br>
    <div>
        <h1>Welkom bij Health One Admin</h1>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-12 text-dark">
                <?php
                $email=$_SESSION['user']->email;
                echo "<p class='text-dark'>Uw email: <b>  $email</b></p>";

                ?>
            </div>
        </div>
        <button type="button" class="btn btn-lg btn-warning btn-block white" data-bs-toggle="modal" data-bs-target="#exampleModal">
            Wachtwoord reset
        </button>
        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title text-warning" id="exampleModalLabel">Update Wachtwoord</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <!--                        Start form-->
                        <form  method="post">
                            <p class=""><label>Oud wachtwoord:</label></p>
                            <input type="password" name="old-password">

                            <p  class=""><label>Nieuw wachtwoord:</label></p>
                            <input type="password" name="new-password">

                    </div>
                    <div class="modal-footer">
                        <button type="button submit" name="cancel" class="btn btn-danger" data-bs-dismiss="modal">Sluiten</button>
                        <!--                                Sent form-->
                        <button type="button submit" name="change" class="btn btn-primary">Opslaan</button>
                    </div>
                    </form>
                    <!--                        End form-->
                </div>
            </div>
        </div>
    </div>

    </div>
    </div>
</main>
<?php
include_once ('defaults/footer.php');
?>
</body>
</html>
