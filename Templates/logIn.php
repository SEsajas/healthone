<!DOCTYPE html>
<html lang="en">
<?php
include_once('defaults/head.php');
include_once('defaults/menu.php');
global $users;
?>
<link rel="stylesheet" href="/bootstrap-5/css/signin.css">
<body>

<br>
<br>
<br>
<br>
<main>
    <div class="container">
        <form role="form"  method="POST" class="form-signin" data-dashlane-rid="5d316a59fefbf3b9" data-form-type="login">
            <h1 class="h3 mb-3 font-weight-normal"></h1>
            <label for="inputEmail" class="sr-only">Email address</label>

            <input type="email" name="email" id="inputEmail" class="form-control" placeholder="Email address" required="" autofocus="" data-dashlane-rid="d3b8f118a679e6be" data-kwimpalastatus="alive" data-kwimpalaid="1635491585544-2" data-form-type="email">
            <label for="inputPassword" class="sr-only">Password</label>
            <input type="password" id="inputPassword" name="password" class="form-control" placeholder="Password" required="" data-dashlane-rid="5dd368910949088b" data-kwimpalastatus="alive" data-kwimpalaid="1635491585544-1" data-form-type="password">
            <div class="checkbox mb-3">
                <label data-dashlane-label="true">
                    <input type="checkbox" value="remember-me" data-dashlane-rid="47e49b0e1e19f0d1" data-form-type="consent,rememberme"> Remember me
                </label>
            </div>
            <button class="btn btn-lg btn-outline-secondary btn-block yellow" name="verzenden" type="submit" data-dashlane-rid="c706680e910465e2" data-dashlane-label="true" data-form-type="action,login">Log in</button>
           <p>Nog geen account? <a class="btn btn-sm btn-outline-secondary yellow" href="/register">Registeer nu!</a>  </p>
        </form>
<!--    </div>-->

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