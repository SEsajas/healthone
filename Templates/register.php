<!DOCTYPE html>
<html lang="en">
<?php
include_once('defaults/head.php');
include_once('defaults/menu.php');
?>
<br>
<br>
<br>
<br>
<body>
<main>
<div class="container">

    <div class="row centered-form">
            <div class=" panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">Registreer nu bij Health One!</h3>
                </div>
                <div class="panel-body">
                    <form role="form"  action="/register" method="POST">
                        <div class="row">
                            <div class="col-xs-6 col-sm-6 col-md-6">
                                <div class="form-group">
                                    <input type="text" name="first_name" id="first_name" class="form-control input-sm" placeholder="First Name" >
                                </div>
                            </div>
                            <div class="col-xs-6 col-sm-6 col-md-6">
                                <div class="form-group">
                                    <input type="text" name="last_name" id="last_name" class="form-control input-sm" placeholder="Last Name" >
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-xs-6 col-sm-6 col-md-6">
                                <div class="form-group">
                                    <input type="date" name="birthday" id="birthday" class="form-control input-sm" placeholder="" >
                                </div>
                            </div>
                            <div class="col-xs-6 col-sm-6 col-md-6">
                                <div class="form-group">
                                    <input type="email" name="email" id="email" class="form-control input-sm" placeholder="Email Address" >
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-xs-6 col-sm-6 col-md-6">
                                <div class="form-group">
                                    <input type="password" name="password" id="password" class="form-control input-sm" placeholder="Password" >
                                </div>
                            </div>
                            <div class="col-xs-6 col-sm-6 col-md-6">
                                <div class="form-group">
                                    <input type="password" name="password_confirmation" id="password_confirmation" class="form-control input-sm" placeholder="Confirm Password" >
                                </div>
                            </div>
                        </div>

                        <button type="submit" name="register" class="btn btn-outline-secondary yellow btn-block">Registreer</button>

                    </form>
                </div>
            </div>
    </div>

</div>
</main>
<br>
<br>
<br>
<br>

<?php
include_once ('defaults/footer.php');
?>
</body>
</html>
